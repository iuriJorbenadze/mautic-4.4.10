<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'mautic/mautic';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'aws/aws-crt-php' => 'v1.0.2@3942776a8c99209908ee0b287746263725685732',
  'aws/aws-sdk-php' => '3.222.1@632621d97180e82d3adc1245a7b272774c30dbf5',
  'bandwidth-throttle/token-bucket' => '2.0.0@a0c31a4d0fbcf0c1a68c895fc91bf71455bcec08',
  'barryvdh/elfinder-flysystem-driver' => 'v0.2.1@1f323056495fdce019b6ef1621be697f2945c609',
  'beberlei/doctrineextensions' => 'v1.3.0@008f162f191584a6c37c03a803f718802ba9dd9a',
  'clue/stream-filter' => 'v1.6.0@d6169430c7731d8509da7aecd0af756a5747b78e',
  'composer/ca-bundle' => '1.3.1@4c679186f2aca4ab6a0f1b0b9cf9252decb44d0b',
  'composer/composer' => '2.2.12@ba61e768b410736efe61df01b61f1ec44f51474f',
  'composer/installers' => 'v1.12.0@d20a64ed3c94748397ff5973488761b22f6d3f19',
  'composer/metadata-minifier' => '1.0.0@c549d23829536f0d0e984aaabbf02af91f443207',
  'composer/package-versions-deprecated' => '1.11.99.1@7413f0b55a051e89485c5cb9f765fe24bb02a7b6',
  'composer/pcre' => '1.0.1@67a32d7d6f9f560b726ab25a061b38ff3a80c560',
  'composer/semver' => '3.3.2@3953f23262f2bff1919fc82183ad9acb13ff62c9',
  'composer/spdx-licenses' => '1.5.6@a30d487169d799745ca7280bc90fdfa693536901',
  'composer/xdebug-handler' => '2.0.5@9e36aeed4616366d2b690bdce11f71e9178c579a',
  'doctrine/annotations' => '1.13.2@5b668aef16090008790395c02c893b1ba13f7e08',
  'doctrine/cache' => '2.1.1@331b4d5dbaeab3827976273e9356b3b453c300ce',
  'doctrine/collections' => '1.6.8@1958a744696c6bb3bb0d28db2611dc11610e78af',
  'doctrine/common' => '3.3.0@c824e95d4c83b7102d8bc60595445a6f7d540f96',
  'doctrine/data-fixtures' => '1.4.4@16a03fadb5473f49aad70384002dfd5012fe680e',
  'doctrine/dbal' => '2.13.8@dc9b3c3c8592c935a6e590441f9abc0f9eba335b',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/doctrine-bundle' => '2.5.7@1e0d1d7a5982eeebc37dcb4d77bb1a5c5961d96d',
  'doctrine/doctrine-fixtures-bundle' => '3.4.2@601988c5b46dbd20a0f886f967210aba378a6fd5',
  'doctrine/doctrine-migrations-bundle' => '2.2.3@0a081b55a88259a887af7be654743a8c5f703e99',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.4@8b7ff3e4b7de6b2c84da85637b59fd2880ecaa89',
  'doctrine/instantiator' => '1.4.1@10dcfce151b967d20fde1b34ae6640712c3891bc',
  'doctrine/lexer' => '1.2.3@c268e882d4dbdd85e36e4ad69e02dc284f89d229',
  'doctrine/migrations' => '2.3.5@28d92a34348fee5daeb80879e56461b2e862fc05',
  'doctrine/orm' => '2.12.1@2e4a8722721b934149ff53b191522a6829b6d73b',
  'doctrine/persistence' => '2.5.1@4473480044c88f30e0e8288e7123b60c7eb9efa3',
  'doctrine/sql-formatter' => '1.1.2@20c39c2de286a9d3262cc8ed282a4ae60e265894',
  'egulias/email-validator' => '3.1.2@ee0db30118f661fb166bcffbf5d82032df484697',
  'ezyang/htmlpurifier' => 'v4.14.0@12ab42bd6e742c70c0a52f7b82477fcd44e64b75',
  'friendsofphp/proxy-manager-lts' => 'v1.0.8@581ab35f83ce2135057e0afae892fbf1c583bfb9',
  'friendsofsymfony/oauth-server-bundle' => 'dev-doctrine-fix@33bc2f43bcd100d00afd03d39c05bdebd14467ca',
  'friendsofsymfony/oauth2-php' => '1.3.1@546f869d68fb79b284752e6787263d797165dba4',
  'friendsofsymfony/rest-bundle' => '3.3.0@54f5ffec4bff71b727a2aa4877915ad81358defc',
  'gaufrette/aws-s3-adapter' => 'v0.4.0@a37143f592d5cb0ba124451439af6e6da6784d89',
  'gaufrette/extras' => 'v0.1.0@a2af9a8c53591a4c43a38249e17bcdefdcea8a23',
  'geoip2/geoip2' => 'v2.12.2@83adb44ac4b9553d36b579a14673ed124583082f',
  'giggsey/libphonenumber-for-php' => '8.12.47.1@dc6bce9772404a4e4fd48ec30310f51e1b5f027f',
  'giggsey/locale' => '2.2@9c1dca769253f6a3e81f9a5c167f53b6a54ab635',
  'guzzlehttp/guzzle' => '7.4.5@1dd98b0564cb3f6bd16ce683cb755f94c10fbd82',
  'guzzlehttp/oauth-subscriber' => '0.6.0@8d6cab29f8397e5712d00a383eeead36108a3c1f',
  'guzzlehttp/promises' => '1.5.1@fe752aedc9fd8fcca3fe7ad05d419d32998a06da',
  'guzzlehttp/psr7' => '2.4.0@13388f00956b1503577598873fffb5ae994b5737',
  'helios-ag/fm-elfinder-bundle' => '10.1@0c35db5ae1d758baf6970765456f87aec3de347b',
  'intervention/image' => '2.7.1@744ebba495319501b873a4e48787759c72e3fb8c',
  'ip2location/ip2location-php' => '7.2.5@5f637f2e95e51861b9d969aa98f4e5868074f922',
  'jbroadway/urlify' => '1.2.3-stable@b7c142a247bd5fac2bb62ca2491bd151c4d1dee4',
  'jms/metadata' => '2.6.1@c3a3214354b5a765a19875f7b7c5ebcd94e462e5',
  'jms/serializer' => '3.17.1@190f64b051795d447ec755acbfdb1bff330a6707',
  'jms/serializer-bundle' => '4.0.2@62657a1217f1378764cdd69a27d55f476bce277a',
  'joomla/filter' => '1.4.4@09733d70db6c6d91e53e0e0d0fcde9b8638175c4',
  'joomla/string' => '1.4.6@728ba9e39a8f1bd15b75ab878f57fa505184b8ab',
  'justinrainbow/json-schema' => '5.2.12@ad87d5a5ca981228e0e205c2bc7dfb8e24559b60',
  'kamermans/guzzle-oauth2-subscriber' => 'v1.0.11@0849d1b3f221fc98eba8b6ac2f0c35c39671bc5b',
  'knplabs/gaufrette' => 'v0.9.0@786247eba04d4693e88a80ca9fdabb634675dcac',
  'knplabs/knp-menu' => 'v3.3.0@8bd3dc2afa22c65617c563c5e25e62d6e23e98c7',
  'knplabs/knp-menu-bundle' => 'v3.2.0@a0b4224f872d74ae939589eb1ccf0e11291370a9',
  'laminas/laminas-code' => '4.5.1@6fd96d4d913571a2cd056a27b123fa28cb90ac4e',
  'league/flysystem' => '1.1.9@094defdb4a7001845300334e7c1ee2335925ef99',
  'league/flysystem-cached-adapter' => '1.1.0@d1925efb2207ac4be3ad0c40b8277175f99ffaff',
  'league/mime-type-detection' => '1.11.0@ff6248ea87a9f116e78edd6002e39e5128a0d4dd',
  'leezy/pheanstalk-bundle' => '4.0.1@da270142d46352e8ae580043229e6a0f2be7f239',
  'lightsaml/lightsaml' => '1.4.1@377f04d1fb25f2fb2e72dabeff10b336f1cbe4c5',
  'lightsaml/sp-bundle' => '1.2.1@2150175dd2a5ad9cccfa7892e8c4af04503f5881',
  'lightsaml/symfony-bridge' => '1.3.0@8d3120825032a7468e894d0ae68630f21cd6035b',
  'maennchen/zipstream-php' => '2.1.0@c4c5803cc1f93df3d2448478ef79394a5981cc58',
  'malkusch/lock' => 'v1.4@96cd2d82180fc87bd8ad45aac25486f82d9fbf4b',
  'markbaker/complex' => '3.0.1@ab8bc271e404909db09ff2d5ffa1e538085c0f22',
  'markbaker/matrix' => '3.0.0@c66aefcafb4f6c269510e9ac46b82619a904c576',
  'matomo/device-detector' => '4.3.1@88e5419ee1448ccb9537e287dd09836ff9d2de3b',
  'mautic/core-lib' => '4.3.x-dev@3e7a938c18f6adbf4dec4f29e0f9be362c55f40a',
  'maxmind-db/reader' => 'v1.11.0@b1f3c0699525336d09cc5161a2861268d9f2ae5b',
  'maxmind/web-service-common' => 'v0.9.0@4dc5a3e8df38aea4ca3b1096cee3a038094e9b53',
  'misd/phone-number-bundle' => 'v1.3.2@32e569b8aa4378e89345668e0cc526d1e0e5837a',
  'monolog/monolog' => '1.27.0@52ebd235c1f7e0d5e1b16464b695a28335f8e44a',
  'mrclay/minify' => '2.2.0@d245bca4987dec197d1e6d7dc117614b60ff7494',
  'mtdowling/jmespath.php' => '2.6.1@9b87907a81b87bc76d19a7fb2d61e61486ee9edb',
  'mustangostang/spyc' => '0.6.3@4627c838b16550b666d15aeae1e5289dd5b77da0',
  'myclabs/php-enum' => '1.8.3@b942d263c641ddb5190929ff840c68f78713e937',
  'nikic/php-parser' => 'v4.13.2@210577fe3cf7badcc5814d99455df46564f3c077',
  'noxlogic/ratelimit-bundle' => 'v1.18.0@27f31b17ae46740f8948c38291db59cf7e663e4b',
  'oneup/uploader-bundle' => '3.2.0@461e503cef5d1f73b784aecf1131a79fcc8ed181',
  'paragonie/constant_time_encoding' => 'v2.5.0@9229e15f2e6ba772f0c55dd6986c563b937170a8',
  'paragonie/random_compat' => 'v2.0.21@96c132c7f2f7bc3230723b66e89f8f150b29d5ae',
  'pda/pheanstalk' => 'v4.0.4@1a43eb97a53144a2e692bce2ea2be721cc9913a4',
  'php-amqplib/php-amqplib' => 'v3.2.0@0bec5b392428e0ac3b3f34fbc4e02d706995833e',
  'php-amqplib/rabbitmq-bundle' => '2.11.0@b2265a87aa35907beb3593c182d340a220b60461',
  'php-http/discovery' => '1.14.1@de90ab2b41d7d61609f504e031339776bc8c7223',
  'php-http/guzzle7-adapter' => '1.0.0@fb075a71dbfa4847cf0c2938c4e5a9c478ef8b01',
  'php-http/httplug' => '2.3.0@f640739f80dfa1152533976e3c112477f69274eb',
  'php-http/message' => '1.13.0@7886e647a30a966a1a8d1dad1845b71ca8678361',
  'php-http/message-factory' => 'v1.0.2@a478cb11f66a6ac48d8954216cfed9aa06a501a1',
  'php-http/promise' => '1.1.0@4c4c1f9b7289a2ec57cde7f1e9762a5789506f88',
  'phpoffice/phpspreadsheet' => '1.23.0@21e4cf62699eebf007db28775f7d1554e612ed9e',
  'phpseclib/phpseclib' => '3.0.14@2f0b7af658cbea265cbb4a791d6c29a6613f98ef',
  'phpstan/phpdoc-parser' => '1.4.5@129a63b3bc7caeb593c224c41f420675e63cfefc',
  'predis/predis' => 'v1.1.10@a2fb02d738bedadcffdbb07efa3a5e7bd57f8d6e',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.1.2@513e0666f7216c7459170d56df27dfcefe1689ea',
  'psr/http-client' => '1.0.1@2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'psy/psysh' => 'v0.10.12@a0d9981aa07ecfcbea28e4bfa868031cca121e7d',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/uuid' => '3.9.6@ffa80ab953edd85d5b6c004f96181a538aad35a3',
  'react/promise' => 'v2.9.0@234f8fd1023c9158e2314fa9d7d0e6a83db42910',
  'robrichards/xmlseclibs' => '3.1.1@f8f19e58f26cdb42c54b214ff8a820760292f8df',
  'seld/jsonlint' => '1.9.0@4211420d25eba80712bff236a98960ef68b866b7',
  'seld/phar-utils' => '1.2.0@9f3452c93ff423469c0d56450431562ca423dcee',
  'sendgrid/php-http-client' => '3.14.4@6d589564522be290c7d7c18e51bcd8b03aeaf0b6',
  'sendgrid/sendgrid' => '6.2.0@4d500a972739ef2c596299f3ad822dd231aab4df',
  'sensio/framework-extra-bundle' => 'v6.2.6@6bd976c99ef3f78e31c9490a10ba6dd8901076eb',
  'simshaun/recurr' => 'v3.1.1@2702aedc996d4c6520731a1661ab4dc2501799a4',
  'sparkpost/sparkpost' => '2.3.0@2c7f60d27afbbbea05c72cb33ef9094f9cfceb88',
  'stack/builder' => 'v1.0.6@a4faaa6f532c6086bc66c29e1bc6c29593e1ca7c',
  'stack/run' => 'v1.1.0@ca5b0b958c024940c72eadead646e19ad1889d29',
  'studio-42/elfinder' => '2.1.61@33bee2654615db62e9b722efb4fdd2a21844fbb2',
  'swiftmailer/swiftmailer' => 'v6.3.0@8a5d5072dca8f48460fce2f4131fcc495eec654c',
  'symfony/asset' => 'v4.4.40@4dee0d02664f2d06005c56b8e43612b7a372e47d',
  'symfony/cache' => 'v4.4.41@27121284fe32a7cefc225268761ec7ce1741b9ac',
  'symfony/cache-contracts' => 'v2.5.1@64be4a7acb83b6f2bf6de9a02cee6dad41277ebc',
  'symfony/config' => 'v4.4.41@9d031eb2d4292aed117b0f7fafd5c436dcf3dfd7',
  'symfony/console' => 'v4.4.41@0e1e62083b20ccb39c2431293de060f756af905c',
  'symfony/css-selector' => 'v4.4.37@0628e6c6d7c92f1a7bae543959bdc17347be2436',
  'symfony/debug' => 'v4.4.41@6637e62480b60817b9a6984154a533e8e64c6bd5',
  'symfony/dependency-injection' => 'v4.4.41@74c7f55de0eced4d3c9654809b1871870386a577',
  'symfony/deprecation-contracts' => 'v2.5.1@e8b495ea28c1d97b5e0c121748d6f9b53d075c66',
  'symfony/doctrine-bridge' => 'v4.4.41@3a573aaad585795033e27ed2134537fcbc2f8362',
  'symfony/dotenv' => 'v4.4.37@fcedd6d382b3afc3e1e786aa4e4fc4cf06f564cf',
  'symfony/error-handler' => 'v4.4.41@529feb0e03133dbd5fd3707200147cc4903206da',
  'symfony/event-dispatcher' => 'v4.4.37@3ccfcfb96ecce1217d7b0875a0736976bc6e63dc',
  'symfony/event-dispatcher-contracts' => 'v1.1.12@1d5cd762abaa6b2a4169d3e77610193a7157129e',
  'symfony/expression-language' => 'v4.4.41@2774df99a13bbf2339e1c5b1f8c47dbec8d67c2b',
  'symfony/filesystem' => 'v4.4.39@72a5b35fecaa670b13954e6eaf414acbe2a67b35',
  'symfony/finder' => 'v4.4.41@40790bdf293b462798882ef6da72bb49a4a6633a',
  'symfony/flex' => 'v1.18.6@130851b90c1ea615ac5be6fce827971f4f55afbf',
  'symfony/form' => 'v4.4.41@d874bd4208741fd88bd5a1c6d22f2b30a28dc47e',
  'symfony/framework-bundle' => 'v4.4.41@1ebfe9ee486d19a081fc74bb617df76f7ee1c7d5',
  'symfony/http-client' => 'v4.4.41@bad7c3296590c5a69a9ed89e8a51f13c07c34b54',
  'symfony/http-client-contracts' => 'v2.5.1@1a4f708e4e87f335d1b1be6148060739152f0bd5',
  'symfony/http-foundation' => 'v4.4.41@27441220aebeb096b4eb8267acaaa7feb5e4266c',
  'symfony/http-kernel' => 'v4.4.41@7f8ce5bffc3939c63b7da32de5a546c98eb67698',
  'symfony/inflector' => 'v5.4.3@6157dac05bbd287d341b82d67a549fdf468f86d1',
  'symfony/intl' => 'v4.4.41@b95abb9cfb6d8ef4da80fef36ef7cabc1391682e',
  'symfony/lock' => 'v5.4.7@a16279554621453840eb8af14d12cfa24c10b8d3',
  'symfony/mime' => 'v5.4.8@af49bc163ec3272f677bde3bc44c0d766c1fd662',
  'symfony/monolog-bridge' => 'v4.4.37@152dcde5092b6fe034369f4a2dea05de38db9b79',
  'symfony/monolog-bundle' => 'v3.5.0@dd80460fcfe1fa2050a7103ad818e9d0686ce6fd',
  'symfony/options-resolver' => 'v4.4.37@41d1e741a292574887629369400820c9645e8a87',
  'symfony/polyfill-ctype' => 'v1.25.0@30885182c981ab175d4d034db0f6f469898070ab',
  'symfony/polyfill-iconv' => 'v1.25.0@f1aed619e28cb077fc83fac8c4c0383578356e40',
  'symfony/polyfill-intl-grapheme' => 'v1.25.0@81b86b50cf841a64252b439e738e97f4a34e2783',
  'symfony/polyfill-intl-icu' => 'v1.25.0@c023a439b8551e320cc3c8433b198e408a623af1',
  'symfony/polyfill-intl-idn' => 'v1.26.0@59a8d271f00dd0e4c2e518104cc7963f655a1aa8',
  'symfony/polyfill-intl-normalizer' => 'v1.26.0@219aa369ceff116e673852dce47c3a41794c14bd',
  'symfony/polyfill-mbstring' => 'v1.26.0@9344f9cb97f3b19424af1a21a3b0e75b0a7d8d7e',
  'symfony/polyfill-php72' => 'v1.26.0@bf44a9fd41feaac72b074de600314a93e2ae78e2',
  'symfony/polyfill-php73' => 'v1.25.0@cc5db0e22b3cb4111010e48785a97f670b350ca5',
  'symfony/polyfill-php74' => 'v1.25.0@a5d80cdf049bd3b0af6da91184a2cd37533c0fd8',
  'symfony/polyfill-php80' => 'v1.25.0@4407588e0d3f1f52efb65fbe92babe41f37fe50c',
  'symfony/polyfill-php81' => 'v1.25.0@5de4ba2d41b15f9bd0e19b2ab9674135813ec98f',
  'symfony/process' => 'v4.4.41@9eedd60225506d56e42210a70c21bb80ca8456ce',
  'symfony/property-access' => 'v4.4.41@363945473bc6ec784e75037b075cb98f85cdae36',
  'symfony/routing' => 'v4.4.41@c25e38d403c00d5ddcfc514f016f1b534abdf052',
  'symfony/security' => 'v4.4.41@1fb1b4e3a2d2c4aa9fdb698800f5a226a31269a2',
  'symfony/security-acl' => 'v3.0.4@dc8f10b3bda34e9ddcad49edc7accf61f31fce43',
  'symfony/security-bundle' => 'v4.4.41@6549321a5abecccb311a697b6cb508a3c325ed18',
  'symfony/service-contracts' => 'v2.5.1@24d9dc654b83e91aa59f9d167b131bc3b5bea24c',
  'symfony/stopwatch' => 'v4.4.38@7f4f5a8122f7530d688cc9edf2f8c9261552fa2d',
  'symfony/string' => 'v5.4.8@3c061a76bff6d6ea427d85e12ad1bb8ed8cd43e8',
  'symfony/swiftmailer-bundle' => 'v3.5.4@9daab339f226ac958192bf89836cb3378cc0e652',
  'symfony/templating' => 'v4.4.37@c9f26891506faa504078704430a0e421b5147a03',
  'symfony/translation' => 'v4.4.41@dcb67eae126e74507e0b4f0b9ac6ef35b37c3331',
  'symfony/translation-contracts' => 'v2.5.1@1211df0afa701e45a04253110e959d4af4ef0f07',
  'symfony/twig-bridge' => 'v4.4.41@48391149d8fe7fc1b0ed2d67868f02686f8171dc',
  'symfony/twig-bundle' => 'v4.4.41@164c1edc69f2c7ee337323efc78a8a8a263f45ff',
  'symfony/validator' => 'v4.4.41@b79a7830b8ead3fb0a2a0080ba6f5b2a0861c28c',
  'symfony/var-dumper' => 'v4.4.41@58eb36075c04aaf92a7a9f38ee9a8b97e24eb481',
  'symfony/var-exporter' => 'v5.4.8@7e132a3fcd4b57add721b4207236877b6017ec93',
  'symfony/yaml' => 'v4.4.37@d7f637cc0f0cc14beb0984f2bb50da560b271311',
  'theofidry/psysh-bundle' => '4.4.0@c3d3807420961a0c70db3ff1b2527b7138ccf412',
  'tightenco/collect' => 'v8.83.8@7275c1b5f6bfc539d72bb5984d3b9a89e47e27c9',
  'twig/twig' => 'v3.3.10@8442df056c51b706793adf80a9fd363406dd3674',
  'twilio/sdk' => '5.42.2@0cfcb871b18a9c427dd9e8f0ed7458d43009b48a',
  'voku/portable-ascii' => '1.6.1@87337c91b9dfacee02452244ee14ab3c43bc485a',
  'voku/stop-words' => '2.0.1@8e63c0af20f800b1600783764e0ce19e53969f71',
  'willdurand/jsonp-callback-validator' => 'v2.0.0@738c36e91d4d7e0ff0cac145f77057e0fb88526e',
  'willdurand/negotiation' => '3.1.0@68e9ea0553ef6e2ee8db5c1d98829f111e623ec2',
  'mautic/grapes-js-builder-bundle' => '4.4.10@34a7de004a86cdc169d9aa36e3b41040ad95c99b',
  'mautic/plugin-citrix' => '4.4.10@34a7de004a86cdc169d9aa36e3b41040ad95c99b',
  'mautic/plugin-clearbit' => '4.4.10@34a7de004a86cdc169d9aa36e3b41040ad95c99b',
  'mautic/plugin-cloudstorage' => '4.4.10@34a7de004a86cdc169d9aa36e3b41040ad95c99b',
  'mautic/plugin-crm' => '4.4.10@34a7de004a86cdc169d9aa36e3b41040ad95c99b',
  'mautic/plugin-emailmarketing' => '4.4.10@34a7de004a86cdc169d9aa36e3b41040ad95c99b',
  'mautic/plugin-focus' => '4.4.10@34a7de004a86cdc169d9aa36e3b41040ad95c99b',
  'mautic/plugin-fullcontact' => '4.4.10@34a7de004a86cdc169d9aa36e3b41040ad95c99b',
  'mautic/plugin-gmail' => '4.4.10@34a7de004a86cdc169d9aa36e3b41040ad95c99b',
  'mautic/plugin-outlook' => '4.4.10@34a7de004a86cdc169d9aa36e3b41040ad95c99b',
  'mautic/plugin-social' => '4.4.10@34a7de004a86cdc169d9aa36e3b41040ad95c99b',
  'mautic/plugin-zapier' => '4.4.10@34a7de004a86cdc169d9aa36e3b41040ad95c99b',
  'mautic/plugin-tagmanager' => '4.4.10@34a7de004a86cdc169d9aa36e3b41040ad95c99b',
  'mautic/theme-coffee' => '4.4.10@34a7de004a86cdc169d9aa36e3b41040ad95c99b',
  'mautic/theme-mauve' => '4.4.10@34a7de004a86cdc169d9aa36e3b41040ad95c99b',
  'mautic/theme-nature' => '4.4.10@34a7de004a86cdc169d9aa36e3b41040ad95c99b',
  'mautic/theme-aurora' => '4.4.10@34a7de004a86cdc169d9aa36e3b41040ad95c99b',
  'mautic/theme-blank' => '4.4.10@34a7de004a86cdc169d9aa36e3b41040ad95c99b',
  'mautic/theme-brienz' => '4.4.10@34a7de004a86cdc169d9aa36e3b41040ad95c99b',
  'mautic/theme-cards' => '4.4.10@34a7de004a86cdc169d9aa36e3b41040ad95c99b',
  'mautic/theme-confirmme' => '4.4.10@34a7de004a86cdc169d9aa36e3b41040ad95c99b',
  'mautic/theme-fresh-center' => '4.4.10@34a7de004a86cdc169d9aa36e3b41040ad95c99b',
  'mautic/theme-fresh-fixed' => '4.4.10@34a7de004a86cdc169d9aa36e3b41040ad95c99b',
  'mautic/theme-fresh-left' => '4.4.10@34a7de004a86cdc169d9aa36e3b41040ad95c99b',
  'mautic/theme-fresh-wide' => '4.4.10@34a7de004a86cdc169d9aa36e3b41040ad95c99b',
  'mautic/theme-goldstar' => '4.4.10@34a7de004a86cdc169d9aa36e3b41040ad95c99b',
  'mautic/theme-neopolitan' => '4.4.10@34a7de004a86cdc169d9aa36e3b41040ad95c99b',
  'mautic/theme-oxygen' => '4.4.10@34a7de004a86cdc169d9aa36e3b41040ad95c99b',
  'mautic/theme-paprika' => '4.4.10@34a7de004a86cdc169d9aa36e3b41040ad95c99b',
  'mautic/theme-skyline' => '4.4.10@34a7de004a86cdc169d9aa36e3b41040ad95c99b',
  'mautic/theme-sparse' => '4.4.10@34a7de004a86cdc169d9aa36e3b41040ad95c99b',
  'mautic/theme-sunday' => '4.4.10@34a7de004a86cdc169d9aa36e3b41040ad95c99b',
  'mautic/theme-vibrant' => '4.4.10@34a7de004a86cdc169d9aa36e3b41040ad95c99b',
  'mautic/mautic' => '4.4.10@34a7de004a86cdc169d9aa36e3b41040ad95c99b',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
