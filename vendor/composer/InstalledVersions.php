<?php











namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;






class InstalledVersions
{
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => '1.0.0+no-version-set',
    'version' => '1.0.0.0',
    'aliases' => 
    array (
    ),
    'reference' => NULL,
    'name' => '__root__',
  ),
  'versions' => 
  array (
    '__root__' => 
    array (
      'pretty_version' => '1.0.0+no-version-set',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'doctrine/event-manager' => 
    array (
      'pretty_version' => '1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '41370af6a30faa9dc0368c4a6814d596e81aba7f',
    ),
    'doctrine/lexer' => 
    array (
      'pretty_version' => '1.2.2',
      'version' => '1.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '9c50f840f257bbb941e6f4a0e94ccf5db5c3f76c',
    ),
    'jawira/plantuml' => 
    array (
      'pretty_version' => 'v1.2022.1',
      'version' => '1.2022.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '045826ffd234618d5ffb21e66bdc4f09c4573c27',
    ),
    'jean85/pretty-package-versions' => 
    array (
      'pretty_version' => '2.0.5',
      'version' => '2.0.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ae547e455a3d8babd07b96966b17d7fd21d9c6af',
    ),
    'league/commonmark' => 
    array (
      'pretty_version' => '1.6.7',
      'version' => '1.6.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '2b8185c13bc9578367a5bf901881d1c1b5bbd09b',
    ),
    'league/flysystem' => 
    array (
      'pretty_version' => '1.1.9',
      'version' => '1.1.9.0',
      'aliases' => 
      array (
      ),
      'reference' => '094defdb4a7001845300334e7c1ee2335925ef99',
    ),
    'league/mime-type-detection' => 
    array (
      'pretty_version' => '1.9.0',
      'version' => '1.9.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'aa70e813a6ad3d1558fc927863d47309b4c23e69',
    ),
    'league/pipeline' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'aa14b0e3133121f8be39e9a3b6ddd011fc5bb9a8',
    ),
    'league/tactician' => 
    array (
      'pretty_version' => 'v1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e79f763170f3d5922ec29e85cffca0bac5cd8975',
    ),
    'league/tactician-bundle' => 
    array (
      'pretty_version' => 'v1.3.2',
      'version' => '1.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '069c665b47530ada5a8442ba9dbbe1ff6704a1b7',
    ),
    'league/tactician-container' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd1a5d884e072b8cafbff802d07766076eb2ffcb0',
    ),
    'league/tactician-logger' => 
    array (
      'pretty_version' => 'v0.11.0',
      'version' => '0.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c2d0977445d18d7e3d85adccef7dc14948707ea9',
    ),
    'league/uri' => 
    array (
      'pretty_version' => '6.5.0',
      'version' => '6.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c68ca445abb04817d740ddd6d0b3551826ef0c5a',
    ),
    'league/uri-interfaces' => 
    array (
      'pretty_version' => '2.3.0',
      'version' => '2.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '00e7e2943f76d8cb50c7dfdc2f6dee356e15e383',
    ),
    'monolog/monolog' => 
    array (
      'pretty_version' => '2.3.5',
      'version' => '2.3.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fd4380d6fc37626e2f799f29d91195040137eba9',
    ),
    'nikic/php-parser' => 
    array (
      'pretty_version' => 'v4.13.2',
      'version' => '4.13.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '210577fe3cf7badcc5814d99455df46564f3c077',
    ),
    'paragonie/random_compat' => 
    array (
      'replaced' => 
      array (
        0 => '2.*',
      ),
    ),
    'paypal/paypal-checkout-sdk' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ed6a55075448308b87a8b59dcb7fedf04a048cb1',
    ),
    'paypal/paypalhttp' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1ad9b846a046f09d6135cbf2cbaa7701bbc630a3',
    ),
    'phpdocumentor/flyfinder' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6e145e676d9fbade7527fd8d4c99ab36b687b958',
    ),
    'phpdocumentor/graphviz' => 
    array (
      'pretty_version' => '2.1.0',
      'version' => '2.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '115999dc7f31f2392645aa825a94a6b165e1cedf',
    ),
    'phpdocumentor/phpdocumentor' => 
    array (
      'pretty_version' => 'v3.1.2',
      'version' => '3.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '888fd76678506f9638e955218465bada0048e40a',
    ),
    'phpdocumentor/reflection' => 
    array (
      'pretty_version' => '5.1.0',
      'version' => '5.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd0fcff5f5fcd319bd8ca9fb73f17646ba6f58534',
    ),
    'phpdocumentor/reflection-common' => 
    array (
      'pretty_version' => '2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
    ),
    'phpdocumentor/reflection-docblock' => 
    array (
      'pretty_version' => '5.3.0',
      'version' => '5.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '622548b623e81ca6d78b721c5e029f4ce664f170',
    ),
    'phpdocumentor/type-resolver' => 
    array (
      'pretty_version' => '1.6.0',
      'version' => '1.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '93ebd0014cab80c4ea9f5e297ea48672f1b87706',
    ),
    'psr/cache' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd11b50ad223250cf17b86e38383413f5a6764bf8',
    ),
    'psr/cache-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0',
      ),
    ),
    'psr/container' => 
    array (
      'pretty_version' => '1.1.2',
      'version' => '1.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '513e0666f7216c7459170d56df27dfcefe1689ea',
    ),
    'psr/container-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/event-dispatcher' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
    ),
    'psr/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-message' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f6561bf28d520154e4b0ec72be95418abe6d9363',
    ),
    'psr/log' => 
    array (
      'pretty_version' => '1.1.4',
      'version' => '1.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd49695b909c3b7628b6289db5479a1c204601f11',
    ),
    'psr/log-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0',
        1 => '1.0.0 || 2.0.0 || 3.0.0',
      ),
    ),
    'psr/simple-cache-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0',
      ),
    ),
    'symfony/cache' => 
    array (
      'pretty_version' => 'v5.4.3',
      'version' => '5.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '4178f0a19ec3f1f76e7f1a07b8187cbe3d94b825',
    ),
    'symfony/cache-contracts' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.5.0',
      ),
    ),
    'symfony/cache-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0',
      ),
    ),
    'symfony/config' => 
    array (
      'pretty_version' => 'v5.4.3',
      'version' => '5.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd65e1bd990c740e31feb07d2b0927b8d4df9956f',
    ),
    'symfony/console' => 
    array (
      'pretty_version' => 'v5.4.3',
      'version' => '5.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a2a86ec353d825c75856c6fd14fac416a7bdb6b8',
    ),
    'symfony/contracts' => 
    array (
      'pretty_version' => 'v2.5.0',
      'version' => '2.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1f4c95d47bddf0c1579779d4b85602c923ed2f1c',
    ),
    'symfony/dependency-injection' => 
    array (
      'pretty_version' => 'v5.4.3',
      'version' => '5.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '974580fd67f14d65b045c11b09eb149cd4b13df5',
    ),
    'symfony/deprecation-contracts' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.5.0',
      ),
    ),
    'symfony/dom-crawler' => 
    array (
      'pretty_version' => 'v5.2.12',
      'version' => '5.2.12.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c983279c00f723eef8da2a4b1522296c82dc75da',
    ),
    'symfony/dotenv' => 
    array (
      'pretty_version' => 'v5.4.3',
      'version' => '5.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '84d1af2d39dd81b48eb1cd3af3f107eea7a275bb',
    ),
    'symfony/error-handler' => 
    array (
      'pretty_version' => 'v6.0.3',
      'version' => '6.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '20343b3bad7ebafa38138ddcb97290a24722b57b',
    ),
    'symfony/event-dispatcher' => 
    array (
      'pretty_version' => 'v5.4.3',
      'version' => '5.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dec8a9f58d20df252b9cd89f1c6c1530f747685d',
    ),
    'symfony/event-dispatcher-contracts' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.5.0',
      ),
    ),
    'symfony/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '2.0',
      ),
    ),
    'symfony/expression-language' => 
    array (
      'pretty_version' => 'v5.4.3',
      'version' => '5.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c68c6d1a308f6e2a1382bdb3a317959e1ee9aa08',
    ),
    'symfony/filesystem' => 
    array (
      'pretty_version' => 'v5.4.3',
      'version' => '5.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '0f0c4bf1840420f4aef3f32044a9dbb24682731b',
    ),
    'symfony/finder' => 
    array (
      'pretty_version' => 'v5.3.14',
      'version' => '5.3.14.0',
      'aliases' => 
      array (
      ),
      'reference' => '5ab1855ebe36c381ccde572f110f3280f88babf5',
    ),
    'symfony/flex' => 
    array (
      'pretty_version' => 'v1.18.5',
      'version' => '1.18.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '10e438f53a972439675dc720706f0cd5c0ed94f1',
    ),
    'symfony/framework-bundle' => 
    array (
      'pretty_version' => 'v5.4.4',
      'version' => '5.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd848b8ca3d87d0fcc9d0ccbc88cf8e128db0d4c7',
    ),
    'symfony/http-client-contracts' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.5.0',
      ),
    ),
    'symfony/http-foundation' => 
    array (
      'pretty_version' => 'v5.4.3',
      'version' => '5.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ef409ff341a565a3663157d4324536746d49a0c7',
    ),
    'symfony/http-kernel' => 
    array (
      'pretty_version' => 'v5.4.4',
      'version' => '5.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '49f40347228c773688a0488feea0175aa7f4d268',
    ),
    'symfony/monolog-bridge' => 
    array (
      'pretty_version' => 'v6.0.3',
      'version' => '6.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '10d90ee25c6a76c12d4bbe8721e354c287e177da',
    ),
    'symfony/monolog-bundle' => 
    array (
      'pretty_version' => 'v3.7.1',
      'version' => '3.7.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fde12fc628162787a4e53877abadc30047fd868b',
    ),
    'symfony/polyfill-ctype' => 
    array (
      'pretty_version' => 'v1.24.0',
      'version' => '1.24.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '30885182c981ab175d4d034db0f6f469898070ab',
    ),
    'symfony/polyfill-iconv' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'symfony/polyfill-intl-grapheme' => 
    array (
      'pretty_version' => 'v1.24.0',
      'version' => '1.24.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '81b86b50cf841a64252b439e738e97f4a34e2783',
    ),
    'symfony/polyfill-intl-idn' => 
    array (
      'pretty_version' => 'v1.24.0',
      'version' => '1.24.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '749045c69efb97c70d25d7463abba812e91f3a44',
    ),
    'symfony/polyfill-intl-normalizer' => 
    array (
      'pretty_version' => 'v1.24.0',
      'version' => '1.24.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8590a5f561694770bdcd3f9b5c69dde6945028e8',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.24.0',
      'version' => '1.24.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '0abb51d2f102e00a4eefcf46ba7fec406d245825',
    ),
    'symfony/polyfill-php56' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'symfony/polyfill-php70' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'symfony/polyfill-php71' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'symfony/polyfill-php72' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'symfony/polyfill-php73' => 
    array (
      'pretty_version' => 'v1.24.0',
      'version' => '1.24.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cc5db0e22b3cb4111010e48785a97f670b350ca5',
    ),
    'symfony/polyfill-php80' => 
    array (
      'pretty_version' => 'v1.24.0',
      'version' => '1.24.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '57b712b08eddb97c762a8caa32c84e037892d2e9',
    ),
    'symfony/polyfill-php81' => 
    array (
      'pretty_version' => 'v1.24.0',
      'version' => '1.24.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5de4ba2d41b15f9bd0e19b2ab9674135813ec98f',
    ),
    'symfony/process' => 
    array (
      'pretty_version' => 'v5.3.14',
      'version' => '5.3.14.0',
      'aliases' => 
      array (
      ),
      'reference' => '8bbae08c19308b9493ad235386144cbefec83cb0',
    ),
    'symfony/routing' => 
    array (
      'pretty_version' => 'v5.4.3',
      'version' => '5.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '44b29c7a94e867ccde1da604792f11a469958981',
    ),
    'symfony/service-contracts' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.5.0',
      ),
    ),
    'symfony/service-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0',
      ),
    ),
    'symfony/stopwatch' => 
    array (
      'pretty_version' => 'v5.4.3',
      'version' => '5.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '395220730edceb6bd745236ccb5c9125c748f779',
    ),
    'symfony/string' => 
    array (
      'pretty_version' => 'v5.3.14',
      'version' => '5.3.14.0',
      'aliases' => 
      array (
      ),
      'reference' => '006fadf2d23b7b1a0ec5f3a0a5a80e1da2819c94',
    ),
    'symfony/translation-contracts' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.5.0',
      ),
    ),
    'symfony/var-dumper' => 
    array (
      'pretty_version' => 'v6.0.3',
      'version' => '6.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '7b701676fc64f9ef11f9b4870f16b48f66be4834',
    ),
    'symfony/var-exporter' => 
    array (
      'pretty_version' => 'v6.0.3',
      'version' => '6.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '1261b2d4a23081cb2b59a4caa311a5ac43b845b6',
    ),
    'symfony/yaml' => 
    array (
      'pretty_version' => 'v5.4.3',
      'version' => '5.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e80f87d2c9495966768310fc531b487ce64237a2',
    ),
    'twig/twig' => 
    array (
      'pretty_version' => 'v2.14.11',
      'version' => '2.14.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '66baa66f29ee30e487e05f1679903e36eb01d727',
    ),
    'webmozart/assert' => 
    array (
      'pretty_version' => '1.10.0',
      'version' => '1.10.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6964c76c7804814a842473e0c8fd15bab0f18e25',
    ),
    'wikimedia/less.php' => 
    array (
      'pretty_version' => 'v3.1.0',
      'version' => '3.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a486d78b9bd16b72f237fc6093aa56d69ce8bd13',
    ),
  ),
);
private static $canGetVendors;
private static $installedByVendor = array();







public static function getInstalledPackages()
{
$packages = array();
foreach (self::getInstalled() as $installed) {
$packages[] = array_keys($installed['versions']);
}


if (1 === \count($packages)) {
return $packages[0];
}

return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
}









public static function isInstalled($packageName)
{
foreach (self::getInstalled() as $installed) {
if (isset($installed['versions'][$packageName])) {
return true;
}
}

return false;
}














public static function satisfies(VersionParser $parser, $packageName, $constraint)
{
$constraint = $parser->parseConstraints($constraint);
$provided = $parser->parseConstraints(self::getVersionRanges($packageName));

return $provided->matches($constraint);
}










public static function getVersionRanges($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

$ranges = array();
if (isset($installed['versions'][$packageName]['pretty_version'])) {
$ranges[] = $installed['versions'][$packageName]['pretty_version'];
}
if (array_key_exists('aliases', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
}
if (array_key_exists('replaced', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
}
if (array_key_exists('provided', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
}

return implode(' || ', $ranges);
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['version'])) {
return null;
}

return $installed['versions'][$packageName]['version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getPrettyVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['pretty_version'])) {
return null;
}

return $installed['versions'][$packageName]['pretty_version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getReference($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['reference'])) {
return null;
}

return $installed['versions'][$packageName]['reference'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getRootPackage()
{
$installed = self::getInstalled();

return $installed[0]['root'];
}







public static function getRawData()
{
return self::$installed;
}



















public static function reload($data)
{
self::$installed = $data;
self::$installedByVendor = array();
}




private static function getInstalled()
{
if (null === self::$canGetVendors) {
self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
}

$installed = array();

if (self::$canGetVendors) {
foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
if (isset(self::$installedByVendor[$vendorDir])) {
$installed[] = self::$installedByVendor[$vendorDir];
} elseif (is_file($vendorDir.'/composer/installed.php')) {
$installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
}
}
}

$installed[] = self::$installed;

return $installed;
}
}
