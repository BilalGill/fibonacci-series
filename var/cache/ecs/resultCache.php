<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1596412456,
	'meta' => array (
  'cacheVersion' => 'v4-callback',
  'phpstanVersion' => '0.12.34',
  'phpVersion' => 70408,
  'configFiles' => 
  array (
    '/home/umar/sites/fibonacci-flix-test/phpstan.neon' => '82b68e475fb5799f81ce9f11e1d94b4217dfa0c7',
  ),
  'analysedPaths' => 
  array (
    0 => '/home/umar/sites/fibonacci-flix-test/src',
    1 => '/home/umar/sites/fibonacci-flix-test/tests',
  ),
  'composerLocks' => 
  array (
    '/home/umar/sites/fibonacci-flix-test/composer.lock' => '328554d917badb6d951e9392c144a5621aa88bbb',
  ),
  'cliAutoloadFile' => NULL,
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'PDO',
    2 => 'Phar',
    3 => 'Reflection',
    4 => 'SPL',
    5 => 'SimpleXML',
    6 => 'bcmath',
    7 => 'bz2',
    8 => 'calendar',
    9 => 'ctype',
    10 => 'curl',
    11 => 'date',
    12 => 'dba',
    13 => 'dom',
    14 => 'exif',
    15 => 'fileinfo',
    16 => 'filter',
    17 => 'ftp',
    18 => 'gd',
    19 => 'gettext',
    20 => 'hash',
    21 => 'iconv',
    22 => 'imap',
    23 => 'intl',
    24 => 'json',
    25 => 'ldap',
    26 => 'libxml',
    27 => 'mbstring',
    28 => 'mysqli',
    29 => 'mysqlnd',
    30 => 'openssl',
    31 => 'pcntl',
    32 => 'pcre',
    33 => 'pdo_mysql',
    34 => 'pdo_pgsql',
    35 => 'pdo_sqlite',
    36 => 'posix',
    37 => 'session',
    38 => 'shmop',
    39 => 'soap',
    40 => 'sockets',
    41 => 'sqlite3',
    42 => 'standard',
    43 => 'sysvsem',
    44 => 'sysvshm',
    45 => 'tokenizer',
    46 => 'xml',
    47 => 'xmlreader',
    48 => 'xmlrpc',
    49 => 'xmlwriter',
    50 => 'xsl',
    51 => 'zip',
    52 => 'zlib',
  ),
  'stubFiles' => 
  array (
    'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/ReflectionClass.stub' => 'ffb6f57879bcd7c9320b7c860d7facd1846e1163',
    'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/iterable.stub' => '3e8ae5e64e244747f4d6a137dbeb8dc96e64e847',
    'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/ArrayObject.stub' => 'dc23c95d7715267249a2530eb276acd7abd4f85f',
    'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/WeakReference.stub' => '2a6220f72171aa65d979f4f8ee06a707ecb96ff4',
    'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/ext-ds.stub' => 'd6ee3aa03606b7a32ba2da3fcaa9bd725b28a868',
    'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/PDOStatement.stub' => 'e8ef2c0c9c8d09136525ee1a9123d958cfe45f3f',
    'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/ReflectionFunctionAbstract.stub' => '1b23e432797a716191e792d673667ebc001643fc',
    'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/date.stub' => '8d63f9636060e7efdfced52e29873f51c7cab46e',
    'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/zip.stub' => 'aff61beeb3e9dfaed0eede432921df5eee2d3b40',
    'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/dom.stub' => '850c98e54136d3dbbd46c1042a9286f7ca4d36f0',
    'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/spl.stub' => '6a8ce07b7dc82139ffd4ab1e84414e984801b065',
  ),
  'level' => '8',
),
	'errorsCallback' => static function (): array { return array (
); },
	'dependencies' => array (
  '/home/umar/sites/fibonacci-flix-test/src/Fibonacci.php' => 
  array (
    'fileHash' => 'c6f1f293393312f047b42207a6805d459e7d242b',
    'dependentFiles' => 
    array (
      0 => '/home/umar/sites/fibonacci-flix-test/src/index.php',
      1 => '/home/umar/sites/fibonacci-flix-test/tests/FibonacciTest.php',
    ),
  ),
  '/home/umar/sites/fibonacci-flix-test/src/IFibonacci.php' => 
  array (
    'fileHash' => 'ccaf09919413402504afa28ddfb9be27709b8a8e',
    'dependentFiles' => 
    array (
      0 => '/home/umar/sites/fibonacci-flix-test/src/Fibonacci.php',
      1 => '/home/umar/sites/fibonacci-flix-test/src/index.php',
      2 => '/home/umar/sites/fibonacci-flix-test/tests/FibonacciTest.php',
    ),
  ),
  '/home/umar/sites/fibonacci-flix-test/src/index.php' => 
  array (
    'fileHash' => '8503a77362ac22c29502e7113948b4c0b9abfdda',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/umar/sites/fibonacci-flix-test/tests/FibonacciTest.php' => 
  array (
    'fileHash' => '393bd2a6b3a085af2c2245e2b692e2a2c66b10ab',
    'dependentFiles' => 
    array (
    ),
  ),
),
];