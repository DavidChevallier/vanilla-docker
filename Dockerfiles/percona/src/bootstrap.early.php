<?php
// Cache
  saveToConfig('Cache.Enabled', true); # Toggle this to true/false to enable/disable caching.
  saveToConfig('Cache.Method', 'memcached');
  saveToConfig('Cache.Memcached.Store', ['memcached:11211']);
  if (c('Cache.Enabled')) {
      if (class_exists('Memcached')) {
          saveToConfig('Cache.Memcached.Option.'.Memcached::OPT_COMPRESSION, true, false);
          saveToConfig('Cache.Memcached.Option.'.Memcached::OPT_DISTRIBUTION, Memcached::DISTRIBUTION_CONSISTENT, false);
          saveToConfig('Cache.Memcached.Option.'.Memcached::OPT_LIBKETAMA_COMPATIBLE, true, false);
          saveToConfig('Cache.Memcached.Option.'.Memcached::OPT_NO_BLOCK, true, false);
          saveToConfig('Cache.Memcached.Option.'.Memcached::OPT_TCP_NODELAY, true, false);
          saveToConfig('Cache.Memcached.Option.'.Memcached::OPT_CONNECT_TIMEOUT, 1000, false);
          saveToConfig('Cache.Memcached.Option.'.Memcached::OPT_SERVER_FAILURE_LIMIT, 2, false);
      } else {
          die('PHP is missing the Memcached extension.');
      }
  }