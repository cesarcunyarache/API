<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'App\\Config\\ErrorLog' => $baseDir . '/src/Config/ErrorLog.php',
    'App\\Config\\ResponseHttp' => $baseDir . '/src/Config/ResponseHttp.php',
    'App\\Config\\Security' => $baseDir . '/src/Config/Security.php',
    'App\\Controllers\\ClienteAuthController' => $baseDir . '/src/Controllers/ClienteAuthController.php',
    'App\\Controllers\\Controller' => $baseDir . '/src/Controllers/Controller.php',
    'App\\Database\\Connection' => $baseDir . '/src/Database/Connection.php',
    'App\\Database\\Sql' => $baseDir . '/src/Database/Sql.php',
    'Attribute' => $vendorDir . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'Dotenv\\Dotenv' => $vendorDir . '/vlucas/phpdotenv/src/Dotenv.php',
    'Dotenv\\Exception\\ExceptionInterface' => $vendorDir . '/vlucas/phpdotenv/src/Exception/ExceptionInterface.php',
    'Dotenv\\Exception\\InvalidEncodingException' => $vendorDir . '/vlucas/phpdotenv/src/Exception/InvalidEncodingException.php',
    'Dotenv\\Exception\\InvalidFileException' => $vendorDir . '/vlucas/phpdotenv/src/Exception/InvalidFileException.php',
    'Dotenv\\Exception\\InvalidPathException' => $vendorDir . '/vlucas/phpdotenv/src/Exception/InvalidPathException.php',
    'Dotenv\\Exception\\ValidationException' => $vendorDir . '/vlucas/phpdotenv/src/Exception/ValidationException.php',
    'Dotenv\\Loader\\Loader' => $vendorDir . '/vlucas/phpdotenv/src/Loader/Loader.php',
    'Dotenv\\Loader\\LoaderInterface' => $vendorDir . '/vlucas/phpdotenv/src/Loader/LoaderInterface.php',
    'Dotenv\\Loader\\Resolver' => $vendorDir . '/vlucas/phpdotenv/src/Loader/Resolver.php',
    'Dotenv\\Parser\\Entry' => $vendorDir . '/vlucas/phpdotenv/src/Parser/Entry.php',
    'Dotenv\\Parser\\EntryParser' => $vendorDir . '/vlucas/phpdotenv/src/Parser/EntryParser.php',
    'Dotenv\\Parser\\Lexer' => $vendorDir . '/vlucas/phpdotenv/src/Parser/Lexer.php',
    'Dotenv\\Parser\\Lines' => $vendorDir . '/vlucas/phpdotenv/src/Parser/Lines.php',
    'Dotenv\\Parser\\Parser' => $vendorDir . '/vlucas/phpdotenv/src/Parser/Parser.php',
    'Dotenv\\Parser\\ParserInterface' => $vendorDir . '/vlucas/phpdotenv/src/Parser/ParserInterface.php',
    'Dotenv\\Parser\\Value' => $vendorDir . '/vlucas/phpdotenv/src/Parser/Value.php',
    'Dotenv\\Repository\\AdapterRepository' => $vendorDir . '/vlucas/phpdotenv/src/Repository/AdapterRepository.php',
    'Dotenv\\Repository\\Adapter\\AdapterInterface' => $vendorDir . '/vlucas/phpdotenv/src/Repository/Adapter/AdapterInterface.php',
    'Dotenv\\Repository\\Adapter\\ApacheAdapter' => $vendorDir . '/vlucas/phpdotenv/src/Repository/Adapter/ApacheAdapter.php',
    'Dotenv\\Repository\\Adapter\\ArrayAdapter' => $vendorDir . '/vlucas/phpdotenv/src/Repository/Adapter/ArrayAdapter.php',
    'Dotenv\\Repository\\Adapter\\EnvConstAdapter' => $vendorDir . '/vlucas/phpdotenv/src/Repository/Adapter/EnvConstAdapter.php',
    'Dotenv\\Repository\\Adapter\\GuardedWriter' => $vendorDir . '/vlucas/phpdotenv/src/Repository/Adapter/GuardedWriter.php',
    'Dotenv\\Repository\\Adapter\\ImmutableWriter' => $vendorDir . '/vlucas/phpdotenv/src/Repository/Adapter/ImmutableWriter.php',
    'Dotenv\\Repository\\Adapter\\MultiReader' => $vendorDir . '/vlucas/phpdotenv/src/Repository/Adapter/MultiReader.php',
    'Dotenv\\Repository\\Adapter\\MultiWriter' => $vendorDir . '/vlucas/phpdotenv/src/Repository/Adapter/MultiWriter.php',
    'Dotenv\\Repository\\Adapter\\PutenvAdapter' => $vendorDir . '/vlucas/phpdotenv/src/Repository/Adapter/PutenvAdapter.php',
    'Dotenv\\Repository\\Adapter\\ReaderInterface' => $vendorDir . '/vlucas/phpdotenv/src/Repository/Adapter/ReaderInterface.php',
    'Dotenv\\Repository\\Adapter\\ReplacingWriter' => $vendorDir . '/vlucas/phpdotenv/src/Repository/Adapter/ReplacingWriter.php',
    'Dotenv\\Repository\\Adapter\\ServerConstAdapter' => $vendorDir . '/vlucas/phpdotenv/src/Repository/Adapter/ServerConstAdapter.php',
    'Dotenv\\Repository\\Adapter\\WriterInterface' => $vendorDir . '/vlucas/phpdotenv/src/Repository/Adapter/WriterInterface.php',
    'Dotenv\\Repository\\RepositoryBuilder' => $vendorDir . '/vlucas/phpdotenv/src/Repository/RepositoryBuilder.php',
    'Dotenv\\Repository\\RepositoryInterface' => $vendorDir . '/vlucas/phpdotenv/src/Repository/RepositoryInterface.php',
    'Dotenv\\Store\\FileStore' => $vendorDir . '/vlucas/phpdotenv/src/Store/FileStore.php',
    'Dotenv\\Store\\File\\Paths' => $vendorDir . '/vlucas/phpdotenv/src/Store/File/Paths.php',
    'Dotenv\\Store\\File\\Reader' => $vendorDir . '/vlucas/phpdotenv/src/Store/File/Reader.php',
    'Dotenv\\Store\\StoreBuilder' => $vendorDir . '/vlucas/phpdotenv/src/Store/StoreBuilder.php',
    'Dotenv\\Store\\StoreInterface' => $vendorDir . '/vlucas/phpdotenv/src/Store/StoreInterface.php',
    'Dotenv\\Store\\StringStore' => $vendorDir . '/vlucas/phpdotenv/src/Store/StringStore.php',
    'Dotenv\\Util\\Regex' => $vendorDir . '/vlucas/phpdotenv/src/Util/Regex.php',
    'Dotenv\\Util\\Str' => $vendorDir . '/vlucas/phpdotenv/src/Util/Str.php',
    'Dotenv\\Validator' => $vendorDir . '/vlucas/phpdotenv/src/Validator.php',
    'Firebase\\JWT\\BeforeValidException' => $vendorDir . '/firebase/php-jwt/src/BeforeValidException.php',
    'Firebase\\JWT\\CachedKeySet' => $vendorDir . '/firebase/php-jwt/src/CachedKeySet.php',
    'Firebase\\JWT\\ExpiredException' => $vendorDir . '/firebase/php-jwt/src/ExpiredException.php',
    'Firebase\\JWT\\JWK' => $vendorDir . '/firebase/php-jwt/src/JWK.php',
    'Firebase\\JWT\\JWT' => $vendorDir . '/firebase/php-jwt/src/JWT.php',
    'Firebase\\JWT\\JWTExceptionWithPayloadInterface' => $vendorDir . '/firebase/php-jwt/src/JWTExceptionWithPayloadInterface.php',
    'Firebase\\JWT\\Key' => $vendorDir . '/firebase/php-jwt/src/Key.php',
    'Firebase\\JWT\\SignatureInvalidException' => $vendorDir . '/firebase/php-jwt/src/SignatureInvalidException.php',
    'GrahamCampbell\\ResultType\\Error' => $vendorDir . '/graham-campbell/result-type/src/Error.php',
    'GrahamCampbell\\ResultType\\Result' => $vendorDir . '/graham-campbell/result-type/src/Result.php',
    'GrahamCampbell\\ResultType\\Success' => $vendorDir . '/graham-campbell/result-type/src/Success.php',
    'PhpOption\\LazyOption' => $vendorDir . '/phpoption/phpoption/src/PhpOption/LazyOption.php',
    'PhpOption\\None' => $vendorDir . '/phpoption/phpoption/src/PhpOption/None.php',
    'PhpOption\\Option' => $vendorDir . '/phpoption/phpoption/src/PhpOption/Option.php',
    'PhpOption\\Some' => $vendorDir . '/phpoption/phpoption/src/PhpOption/Some.php',
    'PhpToken' => $vendorDir . '/symfony/polyfill-php80/Resources/stubs/PhpToken.php',
    'Rakit\\Validation\\Attribute' => $vendorDir . '/rakit/validation/src/Attribute.php',
    'Rakit\\Validation\\ErrorBag' => $vendorDir . '/rakit/validation/src/ErrorBag.php',
    'Rakit\\Validation\\Helper' => $vendorDir . '/rakit/validation/src/Helper.php',
    'Rakit\\Validation\\MimeTypeGuesser' => $vendorDir . '/rakit/validation/src/MimeTypeGuesser.php',
    'Rakit\\Validation\\MissingRequiredParameterException' => $vendorDir . '/rakit/validation/src/MissingRequiredParameterException.php',
    'Rakit\\Validation\\Rule' => $vendorDir . '/rakit/validation/src/Rule.php',
    'Rakit\\Validation\\RuleNotFoundException' => $vendorDir . '/rakit/validation/src/RuleNotFoundException.php',
    'Rakit\\Validation\\RuleQuashException' => $vendorDir . '/rakit/validation/src/RuleQuashException.php',
    'Rakit\\Validation\\Rules\\Accepted' => $vendorDir . '/rakit/validation/src/Rules/Accepted.php',
    'Rakit\\Validation\\Rules\\After' => $vendorDir . '/rakit/validation/src/Rules/After.php',
    'Rakit\\Validation\\Rules\\Alpha' => $vendorDir . '/rakit/validation/src/Rules/Alpha.php',
    'Rakit\\Validation\\Rules\\AlphaDash' => $vendorDir . '/rakit/validation/src/Rules/AlphaDash.php',
    'Rakit\\Validation\\Rules\\AlphaNum' => $vendorDir . '/rakit/validation/src/Rules/AlphaNum.php',
    'Rakit\\Validation\\Rules\\AlphaSpaces' => $vendorDir . '/rakit/validation/src/Rules/AlphaSpaces.php',
    'Rakit\\Validation\\Rules\\Before' => $vendorDir . '/rakit/validation/src/Rules/Before.php',
    'Rakit\\Validation\\Rules\\Between' => $vendorDir . '/rakit/validation/src/Rules/Between.php',
    'Rakit\\Validation\\Rules\\Boolean' => $vendorDir . '/rakit/validation/src/Rules/Boolean.php',
    'Rakit\\Validation\\Rules\\Callback' => $vendorDir . '/rakit/validation/src/Rules/Callback.php',
    'Rakit\\Validation\\Rules\\Date' => $vendorDir . '/rakit/validation/src/Rules/Date.php',
    'Rakit\\Validation\\Rules\\Defaults' => $vendorDir . '/rakit/validation/src/Rules/Defaults.php',
    'Rakit\\Validation\\Rules\\Different' => $vendorDir . '/rakit/validation/src/Rules/Different.php',
    'Rakit\\Validation\\Rules\\Digits' => $vendorDir . '/rakit/validation/src/Rules/Digits.php',
    'Rakit\\Validation\\Rules\\DigitsBetween' => $vendorDir . '/rakit/validation/src/Rules/DigitsBetween.php',
    'Rakit\\Validation\\Rules\\Email' => $vendorDir . '/rakit/validation/src/Rules/Email.php',
    'Rakit\\Validation\\Rules\\Extension' => $vendorDir . '/rakit/validation/src/Rules/Extension.php',
    'Rakit\\Validation\\Rules\\In' => $vendorDir . '/rakit/validation/src/Rules/In.php',
    'Rakit\\Validation\\Rules\\Integer' => $vendorDir . '/rakit/validation/src/Rules/Integer.php',
    'Rakit\\Validation\\Rules\\Interfaces\\BeforeValidate' => $vendorDir . '/rakit/validation/src/Rules/Interfaces/BeforeValidate.php',
    'Rakit\\Validation\\Rules\\Interfaces\\ModifyValue' => $vendorDir . '/rakit/validation/src/Rules/Interfaces/ModifyValue.php',
    'Rakit\\Validation\\Rules\\Ip' => $vendorDir . '/rakit/validation/src/Rules/Ip.php',
    'Rakit\\Validation\\Rules\\Ipv4' => $vendorDir . '/rakit/validation/src/Rules/Ipv4.php',
    'Rakit\\Validation\\Rules\\Ipv6' => $vendorDir . '/rakit/validation/src/Rules/Ipv6.php',
    'Rakit\\Validation\\Rules\\Json' => $vendorDir . '/rakit/validation/src/Rules/Json.php',
    'Rakit\\Validation\\Rules\\Lowercase' => $vendorDir . '/rakit/validation/src/Rules/Lowercase.php',
    'Rakit\\Validation\\Rules\\Max' => $vendorDir . '/rakit/validation/src/Rules/Max.php',
    'Rakit\\Validation\\Rules\\Mimes' => $vendorDir . '/rakit/validation/src/Rules/Mimes.php',
    'Rakit\\Validation\\Rules\\Min' => $vendorDir . '/rakit/validation/src/Rules/Min.php',
    'Rakit\\Validation\\Rules\\NotIn' => $vendorDir . '/rakit/validation/src/Rules/NotIn.php',
    'Rakit\\Validation\\Rules\\Nullable' => $vendorDir . '/rakit/validation/src/Rules/Nullable.php',
    'Rakit\\Validation\\Rules\\Numeric' => $vendorDir . '/rakit/validation/src/Rules/Numeric.php',
    'Rakit\\Validation\\Rules\\Present' => $vendorDir . '/rakit/validation/src/Rules/Present.php',
    'Rakit\\Validation\\Rules\\Regex' => $vendorDir . '/rakit/validation/src/Rules/Regex.php',
    'Rakit\\Validation\\Rules\\Required' => $vendorDir . '/rakit/validation/src/Rules/Required.php',
    'Rakit\\Validation\\Rules\\RequiredIf' => $vendorDir . '/rakit/validation/src/Rules/RequiredIf.php',
    'Rakit\\Validation\\Rules\\RequiredUnless' => $vendorDir . '/rakit/validation/src/Rules/RequiredUnless.php',
    'Rakit\\Validation\\Rules\\RequiredWith' => $vendorDir . '/rakit/validation/src/Rules/RequiredWith.php',
    'Rakit\\Validation\\Rules\\RequiredWithAll' => $vendorDir . '/rakit/validation/src/Rules/RequiredWithAll.php',
    'Rakit\\Validation\\Rules\\RequiredWithout' => $vendorDir . '/rakit/validation/src/Rules/RequiredWithout.php',
    'Rakit\\Validation\\Rules\\RequiredWithoutAll' => $vendorDir . '/rakit/validation/src/Rules/RequiredWithoutAll.php',
    'Rakit\\Validation\\Rules\\Same' => $vendorDir . '/rakit/validation/src/Rules/Same.php',
    'Rakit\\Validation\\Rules\\Traits\\DateUtilsTrait' => $vendorDir . '/rakit/validation/src/Rules/Traits/DateUtilsTrait.php',
    'Rakit\\Validation\\Rules\\Traits\\FileTrait' => $vendorDir . '/rakit/validation/src/Rules/Traits/FileTrait.php',
    'Rakit\\Validation\\Rules\\Traits\\SizeTrait' => $vendorDir . '/rakit/validation/src/Rules/Traits/SizeTrait.php',
    'Rakit\\Validation\\Rules\\TypeArray' => $vendorDir . '/rakit/validation/src/Rules/TypeArray.php',
    'Rakit\\Validation\\Rules\\UploadedFile' => $vendorDir . '/rakit/validation/src/Rules/UploadedFile.php',
    'Rakit\\Validation\\Rules\\Uppercase' => $vendorDir . '/rakit/validation/src/Rules/Uppercase.php',
    'Rakit\\Validation\\Rules\\Url' => $vendorDir . '/rakit/validation/src/Rules/Url.php',
    'Rakit\\Validation\\Traits\\MessagesTrait' => $vendorDir . '/rakit/validation/src/Traits/MessagesTrait.php',
    'Rakit\\Validation\\Traits\\TranslationsTrait' => $vendorDir . '/rakit/validation/src/Traits/TranslationsTrait.php',
    'Rakit\\Validation\\Validation' => $vendorDir . '/rakit/validation/src/Validation.php',
    'Rakit\\Validation\\Validator' => $vendorDir . '/rakit/validation/src/Validator.php',
    'Stringable' => $vendorDir . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
    'Symfony\\Polyfill\\Ctype\\Ctype' => $vendorDir . '/symfony/polyfill-ctype/Ctype.php',
    'Symfony\\Polyfill\\Mbstring\\Mbstring' => $vendorDir . '/symfony/polyfill-mbstring/Mbstring.php',
    'Symfony\\Polyfill\\Php80\\Php80' => $vendorDir . '/symfony/polyfill-php80/Php80.php',
    'Symfony\\Polyfill\\Php80\\PhpToken' => $vendorDir . '/symfony/polyfill-php80/PhpToken.php',
    'UnhandledMatchError' => $vendorDir . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
    'ValueError' => $vendorDir . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
);
