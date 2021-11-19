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
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99.4@b174585d1fe49ceed21928a945138948cb394600',
  'doctrine/annotations' => '1.13.2@5b668aef16090008790395c02c893b1ba13f7e08',
  'doctrine/cache' => '2.1.1@331b4d5dbaeab3827976273e9356b3b453c300ce',
  'doctrine/collections' => '1.6.8@1958a744696c6bb3bb0d28db2611dc11610e78af',
  'doctrine/common' => '3.1.2@a036d90c303f3163b5be8b8fde9b6755b2be4a3a',
  'doctrine/dbal' => '2.13.3@0d7adf4cadfee6f70850e5b163e6cdd706417838',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/doctrine-bundle' => '2.4.2@4202ce675d29e70a8b9ee763bec021b6f44caccb',
  'doctrine/doctrine-migrations-bundle' => '3.1.1@91f0a5e2356029575f3038432cc188b12f9d5da5',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.3@9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.2.1@818e31703b4fb353c0c23caa714273fc64efa675',
  'doctrine/orm' => '2.9.5@77cc86ed880e3f1f6c9c5819e131a8aaeeeee0da',
  'doctrine/persistence' => '2.2.2@4ce4712e6dc84a156176a0fbbb11954a25c93103',
  'doctrine/sql-formatter' => '1.1.1@56070bebac6e77230ed7d306ad13528e60732871',
  'easycorp/easyadmin-bundle' => 'v3.5.10@7f12b81e6a0080e6a37478fea349143b11423aa6',
  'egulias/email-validator' => '3.1.2@ee0db30118f661fb166bcffbf5d82032df484697',
  'friendsofphp/proxy-manager-lts' => 'v1.0.5@006aa5d32f887a4db4353b13b5b5095613e0611f',
  'jms/metadata' => '2.5.1@a995e6cef6d6f56a6226e1616a519630e2ef0aeb',
  'laminas/laminas-code' => '4.4.3@bb324850d09dd437b6acb142c13e64fdc725b0e1',
  'nikic/php-parser' => 'v4.13.0@50953a2691a922aa1769461637869a0a2faa3f53',
  'psr/cache' => '2.0.0@213f9dbc5b9bfbc4f8db86d2838dc968752ce13b',
  'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/log' => '2.0.0@ef29f6d262798707a9edd554e2b82517ef3a9376',
  'sensio/framework-extra-bundle' => 'v6.2.0@3f5b6490878f8a70ba702e9692007cf979b42f0e',
  'symfony/amqp-messenger' => 'v5.3.7@7bf38ef8c72d51163aa9048d7a8abe03be33f2b4',
  'symfony/asset' => 'v5.3.4@9bd222a8fdd13ecca91384e403247103198f80a1',
  'symfony/cache' => 'v5.3.7@864867b13bd67347497ce956f4b253f8fe18b80c',
  'symfony/cache-contracts' => 'v2.4.0@c0446463729b89dd4fa62e9aeecc80287323615d',
  'symfony/config' => 'v5.3.4@4268f3059c904c61636275182707f81645517a37',
  'symfony/console' => 'v5.3.7@8b1008344647462ae6ec57559da166c2bfa5e16a',
  'symfony/dependency-injection' => 'v5.3.7@a665946279f566d94ed5eb98999cfa65c6fa5a78',
  'symfony/deprecation-contracts' => 'v2.4.0@5f38c8804a9e97d23e0c8d63341088cd8a22d627',
  'symfony/doctrine-bridge' => 'v5.3.7@b3e5ab5a4a94ac9dbfc5bc99ee1d3b940ff51dfd',
  'symfony/doctrine-messenger' => 'v5.3.8@e11b87557afae8631f83c5afaa1de84232a8043e',
  'symfony/dotenv' => 'v5.3.7@99a18c2e23f4d901c36cea2012f9f1a8e25e99e4',
  'symfony/error-handler' => 'v5.3.7@3bc60d0fba00ae8d1eaa9eb5ab11a2bbdd1fc321',
  'symfony/event-dispatcher' => 'v5.3.7@ce7b20d69c66a20939d8952b617506a44d102130',
  'symfony/event-dispatcher-contracts' => 'v2.4.0@69fee1ad2332a7cbab3aca13591953da9cdb7a11',
  'symfony/filesystem' => 'v5.3.4@343f4fe324383ca46792cae728a3b6e2f708fb32',
  'symfony/finder' => 'v5.3.7@a10000ada1e600d109a6c7632e9ac42e8bf2fb93',
  'symfony/flex' => 'v1.16.2@f1e77e62bcb068bf094f4781eca1436ef818ff72',
  'symfony/form' => 'v5.3.7@325f8c34c3bc58192274e64f042cfc2daad792b0',
  'symfony/framework-bundle' => 'v5.3.7@5d4fcef02a42ea86280afcbacedf8de7a039032c',
  'symfony/http-client-contracts' => 'v2.4.0@7e82f6084d7cae521a75ef2cb5c9457bbda785f4',
  'symfony/http-foundation' => 'v5.3.7@e36c8e5502b4f3f0190c675f1c1f1248a64f04e5',
  'symfony/http-kernel' => 'v5.3.7@a3a78e37935a527b50376c22ac1cec35b57fe787',
  'symfony/intl' => 'v5.3.7@1af1675221f35dec23b13193873139338c784290',
  'symfony/mailer' => 'v5.3.9@c1f83da2296741110be35dd779f2a9e412cec466',
  'symfony/messenger' => 'v5.3.9@1cc72a00521c69219ba79b7b04757d5e7fface66',
  'symfony/mime' => 'v5.3.8@a756033d0a7e53db389618653ae991eba5a19a11',
  'symfony/options-resolver' => 'v5.3.7@4b78e55b179003a42523a362cc0e8327f7a69b5e',
  'symfony/password-hasher' => 'v5.3.7@106639b209d0f8b0946394a1108acc9cc20e2216',
  'symfony/polyfill-intl-grapheme' => 'v1.23.1@16880ba9c5ebe3642d1995ab866db29270b36535',
  'symfony/polyfill-intl-icu' => 'v1.23.0@4a80a521d6176870b6445cfb469c130f9cae1dda',
  'symfony/polyfill-intl-idn' => 'v1.23.0@65bd267525e82759e7d8c4e8ceea44f398838e65',
  'symfony/polyfill-intl-normalizer' => 'v1.23.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.23.1@9174a3d80210dca8daa7f31fec659150bbeabfc6',
  'symfony/polyfill-php73' => 'v1.23.0@fba8933c384d6476ab14fb7b8526e5287ca7e010',
  'symfony/polyfill-php80' => 'v1.23.1@1100343ed1a92e3a38f9ae122fc0eb21602547be',
  'symfony/polyfill-php81' => 'v1.23.0@e66119f3de95efc359483f810c4c3e6436279436',
  'symfony/polyfill-uuid' => 'v1.23.0@9165effa2eb8a31bb3fa608df9d529920d21ddd9',
  'symfony/property-access' => 'v5.3.7@a4bbf09b8f3e2d2c89cc2c8b3d6682bf4c3d5589',
  'symfony/property-info' => 'v5.3.7@7202b6c93a07df5df83eb58e3757dffb77fc5d90',
  'symfony/proxy-manager-bridge' => 'v5.3.4@76e61f33f6a34a340bf6e02211214f466e8e1dba',
  'symfony/redis-messenger' => 'v5.3.8@4d775c1728fc3124a58376dc746e643d8ae80849',
  'symfony/routing' => 'v5.3.7@be865017746fe869007d94220ad3f5297951811b',
  'symfony/runtime' => 'v5.3.4@685a4a5491e25c7f2dd251d8fcca583b427ff290',
  'symfony/security-bundle' => 'v5.3.7@aed98f8ca60f1fb474a4db3ade066155d2b040f7',
  'symfony/security-core' => 'v5.3.7@bd3a055d1092a46f6b6599bcda5a7624cd804cb1',
  'symfony/security-csrf' => 'v5.3.4@94b533195cf7fb21f3fae8ce349861c6401d969e',
  'symfony/security-guard' => 'v5.3.7@25f8d2a206505514a0ff14b16c4fb4e17a10cf18',
  'symfony/security-http' => 'v5.3.7@cb3d53b245c38f73e67b1e461ea076ffbb2e6dd7',
  'symfony/service-contracts' => 'v2.4.0@f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb',
  'symfony/stopwatch' => 'v5.3.4@b24c6a92c6db316fee69e38c80591e080e41536c',
  'symfony/string' => 'v5.3.7@8d224396e28d30f81969f083a58763b8b9ceb0a5',
  'symfony/translation' => 'v5.3.7@4d595a6d15fd3a2c67f6f31d14d15d3b7356d7a6',
  'symfony/translation-contracts' => 'v2.4.0@95c812666f3e91db75385749fe219c5e494c7f95',
  'symfony/twig-bridge' => 'v5.3.7@503e12aded4d5cbda4f8d1f3824c6a108119822f',
  'symfony/twig-bundle' => 'v5.3.4@345965b40c1847ebdbb2ab0eb98c71a98a5e167b',
  'symfony/uid' => 'v5.3.3@45853bbc72f2b91c32e707afe7f896fddb3ee8e9',
  'symfony/validator' => 'v5.3.7@916a7c6cf3ede36eb0e4097500e0a12dcff520a7',
  'symfony/var-dumper' => 'v5.3.7@3ad5af4aed07d0a0201bbcfc42658fe6c5b2fb8f',
  'symfony/var-exporter' => 'v5.3.7@2ded877ab0574d8b646f4eb3f716f8ed7ee7f392',
  'symfony/webpack-encore-bundle' => 'v1.12.0@9943a59f8551b7a8181e19a2b4efa60e5907c667',
  'symfony/yaml' => 'v5.3.6@4500fe63dc9c6ffc32d3b1cb0448c329f9c814b7',
  'symfonycasts/verify-email-bundle' => 'v1.5.0@8c21aa9aa6b7123afed213e72485e8dad75e5dcf',
  'twbs/bootstrap' => 'v5.0.2@688bce4fa695cc360a0d084e34f029b0c192b223',
  'twig/twig' => 'v3.3.3@a27fa056df8a6384316288ca8b0fa3a35fdeb569',
  'vich/uploader-bundle' => '1.18.0@c5250c8d6a072960250ce5130e68a5693b3b48dd',
  'symfony/polyfill-ctype' => '*@2befdac04cfe1555bd302316cfc46dd783f6675b',
  'symfony/polyfill-iconv' => '*@2befdac04cfe1555bd302316cfc46dd783f6675b',
  'symfony/polyfill-php72' => '*@2befdac04cfe1555bd302316cfc46dd783f6675b',
  '__root__' => 'dev-main@2befdac04cfe1555bd302316cfc46dd783f6675b',
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
        if (!self::composer2ApiUsable()) {
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
        if (self::composer2ApiUsable()) {
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

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}
