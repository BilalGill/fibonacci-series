<?php
// source: phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/conf/config.neon
// source: phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/conf/config.level8.neon
// source: /home/umar/sites/fibonacci-flix-test/phpstan.neon
// source: phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/src/PhpDoc/../../conf/config.stubValidator.neon
// source: array

/** @noinspection PhpParamsInspection,PhpMethodMayBeStaticInspection */

declare(strict_types=1);

class Container_c2fe5982f5 extends _HumbugBoxc7aa196c4c1e\Nette\DI\Container
{
	protected $tags = [
		'phpstan.phpDoc.typeNodeResolverExtension' => ['019' => true],
		'phpstan.broker.methodsClassReflectionExtension' => ['060' => true],
		'phpstan.broker.propertiesClassReflectionExtension' => ['061' => true, '064' => true, '0121' => true],
		'phpstan.broker.dynamicFunctionReturnTypeExtension' => [
			'089' => true,
			'090' => true,
			'091' => true,
			'092' => true,
			'093' => true,
			'095' => true,
			'096' => true,
			'097' => true,
			'098' => true,
			'099' => true,
			'0100' => true,
			'0101' => true,
			'0102' => true,
			'0103' => true,
			'0104' => true,
			'0105' => true,
			'0106' => true,
			'0110' => true,
			'0112' => true,
			'0114' => true,
			'0115' => true,
			'0116' => true,
			'0117' => true,
			'0118' => true,
			'0119' => true,
			'0120' => true,
			'0122' => true,
			'0125' => true,
			'0126' => true,
			'0127' => true,
			'0128' => true,
			'0129' => true,
			'0130' => true,
			'0131' => true,
			'0132' => true,
			'0133' => true,
			'0134' => true,
			'0135' => true,
			'0136' => true,
			'0137' => true,
			'0138' => true,
			'0159' => true,
			'0160' => true,
			'0162' => true,
			'0163' => true,
			'0164' => true,
		],
		'phpstan.typeSpecifier.functionTypeSpecifyingExtension' => [
			'094' => true,
			'0111' => true,
			'0123' => true,
			'0124' => true,
			'0139' => true,
			'0140' => true,
			'0141' => true,
			'0142' => true,
			'0143' => true,
			'0144' => true,
			'0145' => true,
			'0146' => true,
			'0147' => true,
			'0148' => true,
			'0149' => true,
			'0150' => true,
			'0151' => true,
			'0152' => true,
			'0153' => true,
			'0154' => true,
			'0155' => true,
			'0156' => true,
			'0157' => true,
			'0158' => true,
		],
		'phpstan.broker.dynamicStaticMethodReturnTypeExtension' => ['0107' => true, '0109' => true],
		'phpstan.broker.dynamicMethodReturnTypeExtension' => [
			'0108' => true,
			'0113' => true,
			'0122' => true,
			'0161' => true,
		],
		'phpstan.rules.rule' => [
			'0169' => true,
			'0170' => true,
			'0171' => true,
			'0173' => true,
			'0174' => true,
			'0175' => true,
			'0177' => true,
			'0178' => true,
			'0179' => true,
			'0180' => true,
			'0181' => true,
			'0182' => true,
			'0183' => true,
			'0185' => true,
			'0186' => true,
			'0187' => true,
			'0188' => true,
			'0189' => true,
			'0190' => true,
			'0193' => true,
			'0194' => true,
			'0195' => true,
			'0196' => true,
			'0197' => true,
			'0198' => true,
			'0199' => true,
			'0200' => true,
			'0201' => true,
			'0202' => true,
			'0203' => true,
			'0204' => true,
			'0205' => true,
			'0206' => true,
			'0210' => true,
			'0211' => true,
			'0212' => true,
			'0213' => true,
			'0214' => true,
			'0215' => true,
			'0216' => true,
			'0217' => true,
			'0218' => true,
			'0219' => true,
			'rules.0' => true,
			'rules.1' => true,
			'rules.10' => true,
			'rules.11' => true,
			'rules.12' => true,
			'rules.13' => true,
			'rules.14' => true,
			'rules.15' => true,
			'rules.16' => true,
			'rules.17' => true,
			'rules.18' => true,
			'rules.19' => true,
			'rules.2' => true,
			'rules.20' => true,
			'rules.21' => true,
			'rules.22' => true,
			'rules.23' => true,
			'rules.24' => true,
			'rules.25' => true,
			'rules.26' => true,
			'rules.27' => true,
			'rules.28' => true,
			'rules.29' => true,
			'rules.3' => true,
			'rules.30' => true,
			'rules.31' => true,
			'rules.32' => true,
			'rules.33' => true,
			'rules.34' => true,
			'rules.35' => true,
			'rules.36' => true,
			'rules.37' => true,
			'rules.38' => true,
			'rules.39' => true,
			'rules.4' => true,
			'rules.40' => true,
			'rules.41' => true,
			'rules.42' => true,
			'rules.43' => true,
			'rules.44' => true,
			'rules.45' => true,
			'rules.46' => true,
			'rules.47' => true,
			'rules.48' => true,
			'rules.49' => true,
			'rules.5' => true,
			'rules.50' => true,
			'rules.51' => true,
			'rules.52' => true,
			'rules.53' => true,
			'rules.54' => true,
			'rules.55' => true,
			'rules.56' => true,
			'rules.57' => true,
			'rules.58' => true,
			'rules.59' => true,
			'rules.6' => true,
			'rules.60' => true,
			'rules.61' => true,
			'rules.62' => true,
			'rules.63' => true,
			'rules.64' => true,
			'rules.65' => true,
			'rules.66' => true,
			'rules.67' => true,
			'rules.68' => true,
			'rules.69' => true,
			'rules.7' => true,
			'rules.70' => true,
			'rules.71' => true,
			'rules.72' => true,
			'rules.73' => true,
			'rules.74' => true,
			'rules.75' => true,
			'rules.76' => true,
			'rules.77' => true,
			'rules.78' => true,
			'rules.79' => true,
			'rules.8' => true,
			'rules.80' => true,
			'rules.9' => true,
		],
	];

	protected $types = ['container' => '_HumbugBoxc7aa196c4c1e\Nette\DI\Container'];
	protected $aliases = [];

	protected $wiring = [
		'_HumbugBoxc7aa196c4c1e\Nette\DI\Container' => [['container']],
		'PHPStan\Rules\Rule' => [
			0 => [
				'080',
				'0169',
				'0170',
				'0171',
				'0172',
				'0173',
				'0174',
				'0175',
				'0176',
				'0177',
				'0178',
				'0179',
				'0180',
				'0181',
				'0182',
				'0183',
				'0184',
				'0185',
				'0186',
				'0187',
				'0188',
				'0189',
				'0190',
				'0191',
				'0192',
				'0193',
				'0194',
				'0195',
				'0196',
				'0197',
				'0198',
				'0199',
				'0200',
				'0201',
				'0202',
				'0203',
				'0204',
				'0205',
				'0206',
				'0207',
				'0208',
				'0209',
				'0210',
				'0211',
				'0212',
				'0213',
				'0214',
				'0215',
				'0216',
				'0217',
				'0218',
				'0219',
				'0220',
				'0221',
				'0222',
			],
			2 => [
				'rules.0',
				'rules.1',
				'rules.2',
				'rules.3',
				'rules.4',
				'rules.5',
				'rules.6',
				'rules.7',
				'rules.8',
				'rules.9',
				'rules.10',
				'rules.11',
				'rules.12',
				'rules.13',
				'rules.14',
				'rules.15',
				'rules.16',
				'rules.17',
				'rules.18',
				'rules.19',
				'rules.20',
				'rules.21',
				'rules.22',
				'rules.23',
				'rules.24',
				'rules.25',
				'rules.26',
				'rules.27',
				'rules.28',
				'rules.29',
				'rules.30',
				'rules.31',
				'rules.32',
				'rules.33',
				'rules.34',
				'rules.35',
				'rules.36',
				'rules.37',
				'rules.38',
				'rules.39',
				'rules.40',
				'rules.41',
				'rules.42',
				'rules.43',
				'rules.44',
				'rules.45',
				'rules.46',
				'rules.47',
				'rules.48',
				'rules.49',
				'rules.50',
				'rules.51',
				'rules.52',
				'rules.53',
				'rules.54',
				'rules.55',
				'rules.56',
				'rules.57',
				'rules.58',
				'rules.59',
				'rules.60',
				'rules.61',
				'rules.62',
				'rules.63',
				'rules.64',
				'rules.65',
				'rules.66',
				'rules.67',
				'rules.68',
				'rules.69',
				'rules.70',
				'rules.71',
				'rules.72',
				'rules.73',
				'rules.74',
				'rules.75',
				'rules.76',
				'rules.77',
				'rules.78',
				'rules.79',
				'rules.80',
			],
		],
		'PHPStan\Rules\Arrays\DuplicateKeysInLiteralArraysRule' => [2 => ['rules.0']],
		'PHPStan\Rules\Arrays\OffsetAccessWithoutDimForReadingRule' => [2 => ['rules.1']],
		'PHPStan\Rules\Classes\ClassConstantDeclarationRule' => [2 => ['rules.2']],
		'PHPStan\Rules\Classes\ClassConstantRule' => [2 => ['rules.3']],
		'PHPStan\Rules\Classes\DuplicateDeclarationRule' => [2 => ['rules.4']],
		'PHPStan\Rules\Classes\ExistingClassesInClassImplementsRule' => [2 => ['rules.5']],
		'PHPStan\Rules\Classes\ExistingClassesInInterfaceExtendsRule' => [2 => ['rules.6']],
		'PHPStan\Rules\Classes\ExistingClassInClassExtendsRule' => [2 => ['rules.7']],
		'PHPStan\Rules\Classes\ExistingClassInTraitUseRule' => [2 => ['rules.8']],
		'PHPStan\Rules\Classes\InstantiationRule' => [2 => ['rules.9']],
		'PHPStan\Rules\Classes\NewStaticRule' => [2 => ['rules.10']],
		'PHPStan\Rules\Functions\CallToFunctionParametersRule' => [2 => ['rules.11']],
		'PHPStan\Rules\Functions\ExistingClassesInArrowFunctionTypehintsRule' => [2 => ['rules.12']],
		'PHPStan\Rules\Functions\ExistingClassesInClosureTypehintsRule' => [2 => ['rules.13']],
		'PHPStan\Rules\Functions\ExistingClassesInTypehintsRule' => [2 => ['rules.14']],
		'PHPStan\Rules\Functions\InnerFunctionRule' => [2 => ['rules.15']],
		'PHPStan\Rules\Functions\PrintfParametersRule' => [2 => ['rules.16']],
		'PHPStan\Rules\Methods\AbstractMethodInNonAbstractClassRule' => [2 => ['rules.17']],
		'PHPStan\Rules\Methods\ExistingClassesInTypehintsRule' => [2 => ['rules.18']],
		'PHPStan\Rules\Methods\MissingMethodImplementationRule' => [2 => ['rules.19']],
		'PHPStan\Rules\Properties\AccessPropertiesInAssignRule' => [2 => ['rules.20']],
		'PHPStan\Rules\Properties\AccessStaticPropertiesInAssignRule' => [2 => ['rules.21']],
		'PHPStan\Rules\Variables\UnsetRule' => [2 => ['rules.22']],
		'PHPStan\Rules\Classes\UnusedConstructorParametersRule' => [2 => ['rules.23']],
		'PHPStan\Rules\Constants\ConstantRule' => [2 => ['rules.24']],
		'PHPStan\Rules\Functions\UnusedClosureUsesRule' => [2 => ['rules.25']],
		'PHPStan\Rules\Variables\VariableCertaintyInIssetRule' => [2 => ['rules.26']],
		'PHPStan\Rules\Cast\EchoRule' => [2 => ['rules.27']],
		'PHPStan\Rules\Cast\InvalidCastRule' => [2 => ['rules.28']],
		'PHPStan\Rules\Cast\InvalidPartOfEncapsedStringRule' => [2 => ['rules.29']],
		'PHPStan\Rules\Cast\PrintRule' => [2 => ['rules.30']],
		'PHPStan\Rules\Functions\IncompatibleDefaultParameterTypeRule' => [2 => ['rules.31']],
		'PHPStan\Rules\Generics\ClassAncestorsRule' => [2 => ['rules.32']],
		'PHPStan\Rules\Generics\ClassTemplateTypeRule' => [2 => ['rules.33']],
		'PHPStan\Rules\Generics\FunctionTemplateTypeRule' => [2 => ['rules.34']],
		'PHPStan\Rules\Generics\FunctionSignatureVarianceRule' => [2 => ['rules.35']],
		'PHPStan\Rules\Generics\InterfaceAncestorsRule' => [2 => ['rules.36']],
		'PHPStan\Rules\Generics\InterfaceTemplateTypeRule' => [2 => ['rules.37']],
		'PHPStan\Rules\Generics\MethodTemplateTypeRule' => [2 => ['rules.38']],
		'PHPStan\Rules\Generics\MethodSignatureVarianceRule' => [2 => ['rules.39']],
		'PHPStan\Rules\Generics\TraitTemplateTypeRule' => [2 => ['rules.40']],
		'PHPStan\Rules\Methods\IncompatibleDefaultParameterTypeRule' => [2 => ['rules.41']],
		'PHPStan\Rules\Operators\InvalidBinaryOperationRule' => [2 => ['rules.42']],
		'PHPStan\Rules\Operators\InvalidUnaryOperationRule' => [2 => ['rules.43']],
		'PHPStan\Rules\Operators\InvalidComparisonOperationRule' => [2 => ['rules.44']],
		'PHPStan\Rules\PhpDoc\IncompatiblePhpDocTypeRule' => [2 => ['rules.45']],
		'PHPStan\Rules\PhpDoc\IncompatiblePropertyPhpDocTypeRule' => [2 => ['rules.46']],
		'PHPStan\Rules\PhpDoc\InvalidPhpDocTagValueRule' => [2 => ['rules.47']],
		'PHPStan\Rules\PhpDoc\InvalidPHPStanDocTagRule' => [2 => ['rules.48']],
		'PHPStan\Rules\PhpDoc\InvalidThrowsPhpDocValueRule' => [2 => ['rules.49']],
		'PHPStan\Rules\PhpDoc\WrongVariableNameInVarTagRule' => [2 => ['rules.50']],
		'PHPStan\Rules\Arrays\AppendedArrayItemTypeRule' => [2 => ['rules.51']],
		'PHPStan\Rules\Arrays\IterableInForeachRule' => [2 => ['rules.52']],
		'PHPStan\Rules\Arrays\OffsetAccessAssignmentRule' => [2 => ['rules.53']],
		'PHPStan\Rules\Arrays\OffsetAccessAssignOpRule' => [2 => ['rules.54']],
		'PHPStan\Rules\Arrays\OffsetAccessValueAssignmentRule' => [2 => ['rules.55']],
		'PHPStan\Rules\Arrays\UnpackIterableInArrayRule' => [2 => ['rules.56']],
		'PHPStan\Rules\Functions\ArrowFunctionReturnTypeRule' => [2 => ['rules.57']],
		'PHPStan\Rules\Functions\ClosureReturnTypeRule' => [2 => ['rules.58']],
		'PHPStan\Rules\Generators\YieldTypeRule' => [2 => ['rules.59']],
		'PHPStan\Rules\Methods\ReturnTypeRule' => [2 => ['rules.60']],
		'PHPStan\Rules\Properties\DefaultValueTypesAssignedToPropertiesRule' => [2 => ['rules.61']],
		'PHPStan\Rules\Properties\TypesAssignedToPropertiesRule' => [2 => ['rules.62']],
		'PHPStan\Rules\Variables\ThrowTypeRule' => [2 => ['rules.63']],
		'PHPStan\Rules\Variables\VariableCloningRule' => [2 => ['rules.64']],
		'PHPStan\Rules\Arrays\DeadForeachRule' => [2 => ['rules.65']],
		'PHPStan\Rules\Comparison\NumberComparisonOperatorsConstantConditionRule' => [2 => ['rules.66']],
		'PHPStan\Rules\DeadCode\NoopRule' => [2 => ['rules.67']],
		'PHPStan\Rules\DeadCode\UnreachableStatementRule' => [2 => ['rules.68']],
		'PHPStan\Rules\Exceptions\DeadCatchRule' => [2 => ['rules.69']],
		'PHPStan\Rules\Functions\CallToFunctionStamentWithoutSideEffectsRule' => [2 => ['rules.70']],
		'PHPStan\Rules\Methods\CallToMethodStamentWithoutSideEffectsRule' => [2 => ['rules.71']],
		'PHPStan\Rules\Methods\CallToStaticMethodStamentWithoutSideEffectsRule' => [2 => ['rules.72']],
		'PHPStan\Rules\TooWideTypehints\TooWideArrowFunctionReturnTypehintRule' => [2 => ['rules.73']],
		'PHPStan\Rules\TooWideTypehints\TooWideClosureReturnTypehintRule' => [2 => ['rules.74']],
		'PHPStan\Rules\TooWideTypehints\TooWideFunctionReturnTypehintRule' => [2 => ['rules.75']],
		'PHPStan\Rules\Functions\MissingFunctionParameterTypehintRule' => [2 => ['rules.76']],
		'PHPStan\Rules\Functions\MissingFunctionReturnTypehintRule' => [2 => ['rules.77']],
		'PHPStan\Rules\Methods\MissingMethodParameterTypehintRule' => [2 => ['rules.78']],
		'PHPStan\Rules\Methods\MissingMethodReturnTypehintRule' => [2 => ['rules.79']],
		'PHPStan\Rules\Properties\MissingPropertyTypehintRule' => [2 => ['rules.80']],
		'PhpParser\BuilderFactory' => [['01']],
		'PHPStan\Parser\LexerFactory' => [['02']],
		'PhpParser\NodeTraverserInterface' => [['03']],
		'PhpParser\NodeTraverser' => [['03']],
		'PhpParser\NodeVisitorAbstract' => [['04', '051']],
		'PhpParser\NodeVisitor' => [['04', '051']],
		'PhpParser\NodeVisitor\NameResolver' => [['04']],
		'PhpParser\ParserAbstract' => [['05']],
		'PhpParser\Parser' => [0 => ['05'], 2 => [1 => 'phpParserDecorator']],
		'PhpParser\Parser\Php7' => [['05']],
		'PhpParser\PrettyPrinterAbstract' => [['06']],
		'PhpParser\PrettyPrinter\Standard' => [['06']],
		'PHPStan\Broker\AnonymousClassNameHelper' => [['07']],
		'PHPStan\Php\PhpVersion' => [['08']],
		'PHPStan\Php\PhpVersionFactory' => [['09']],
		'PHPStan\Php\PhpVersionFactoryFactory' => [['010']],
		'PHPStan\PhpDocParser\Lexer\Lexer' => [['011']],
		'PHPStan\PhpDocParser\Parser\TypeParser' => [['012']],
		'PHPStan\PhpDocParser\Parser\ConstExprParser' => [['013']],
		'PHPStan\PhpDocParser\Parser\PhpDocParser' => [['014']],
		'PHPStan\PhpDoc\PhpDocInheritanceResolver' => [['015']],
		'PHPStan\PhpDoc\PhpDocNodeResolver' => [['016']],
		'PHPStan\PhpDoc\PhpDocStringResolver' => [['017']],
		'PHPStan\PhpDoc\ConstExprNodeResolver' => [['018']],
		'PHPStan\PhpDoc\TypeNodeResolverExtension' => [['019']],
		'PHPStan\PhpDoc\TypeAlias\TypeAliasesTypeNodeResolverExtension' => [['019']],
		'PHPStan\PhpDoc\TypeNodeResolver' => [['020']],
		'PHPStan\PhpDoc\TypeNodeResolverExtensionRegistryProvider' => [['021']],
		'PHPStan\PhpDoc\TypeStringResolver' => [['022']],
		'PHPStan\PhpDoc\StubValidator' => [['023']],
		'PHPStan\Analyser\Analyser' => [['024']],
		'PHPStan\Analyser\FileAnalyser' => [['025']],
		'PHPStan\Analyser\IgnoredErrorHelper' => [['026']],
		'PHPStan\Analyser\ScopeFactory' => [['027']],
		'PHPStan\Analyser\LazyScopeFactory' => [['027']],
		'PHPStan\Analyser\NodeScopeResolver' => [['028']],
		'PHPStan\Analyser\ResultCache\ResultCacheManager' => [['029']],
		'PHPStan\Cache\Cache' => [['030']],
		'PHPStan\Command\AnalyseApplication' => [['031']],
		'PHPStan\Command\IgnoredRegexValidator' => [['032']],
		'PHPStan\Dependency\DependencyDumper' => [['033']],
		'PHPStan\Dependency\DependencyResolver' => [['034']],
		'PHPStan\DependencyInjection\Container' => [['035'], ['036']],
		'PHPStan\DependencyInjection\Nette\NetteContainer' => [['036']],
		'PHPStan\DependencyInjection\DerivativeContainerFactory' => [['037']],
		'PHPStan\DependencyInjection\Reflection\ClassReflectionExtensionRegistryProvider' => [['038']],
		'PHPStan\DependencyInjection\Type\DynamicReturnTypeExtensionRegistryProvider' => [['039']],
		'PHPStan\DependencyInjection\Type\OperatorTypeSpecifyingExtensionRegistryProvider' => [['040']],
		'PHPStan\File\FileHelper' => [['041']],
		'PHPStan\File\FileExcluder' => [['042']],
		'PHPStan\File\FileFinder' => [['043']],
		'PHPStan\Parallel\ParallelAnalyser' => [['044']],
		'PHPStan\Parallel\Scheduler' => [['045']],
		'PHPStan\Parser\Parser' => [0 => ['046'], 2 => [1 => 'directParser']],
		'PHPStan\Parser\CachedParser' => [['046']],
		'PHPStan\Parser\FunctionCallStatementFinder' => [['047']],
		'PHPStan\Reflection\FunctionReflectionFactory' => [['048']],
		'PHPStan\Reflection\MethodsClassReflectionExtension' => [['049', '060', '062']],
		'PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension' => [['049']],
		'PHPStan\Reflection\PropertiesClassReflectionExtension' => [['050', '061', '062', '064', '0121']],
		'PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension' => [['050']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor' => [['051']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher' => [['052']],
		'_HumbugBoxc7aa196c4c1e\Roave\BetterReflection\SourceLocator\Type\SourceLocator' => [
			0 => ['053'],
			2 => [1 => 'betterReflectionSourceLocator', 'stubSourceLocator'],
		],
		'PHPStan\Reflection\BetterReflection\SourceLocator\AutoloadSourceLocator' => [['053']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker' => [['054']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory' => [['055']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository' => [['056']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory' => [['057']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory' => [['058']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository' => [['059']],
		'PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension' => [['060']],
		'PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension' => [['061']],
		'PHPStan\Reflection\Php\PhpClassReflectionExtension' => [['062']],
		'PHPStan\Reflection\Php\PhpMethodReflectionFactory' => [['063']],
		'PHPStan\Reflection\BrokerAwareExtension' => [['064', '0160']],
		'PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension' => [['064']],
		'PHPStan\Reflection\ReflectionProvider\ReflectionProviderProvider' => [['065']],
		'PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider' => [['066']],
		'PHPStan\Reflection\SignatureMap\SignatureMapParser' => [['067']],
		'PHPStan\Reflection\SignatureMap\SignatureMapProvider' => [['068']],
		'PHPStan\Rules\ClassCaseSensitivityCheck' => [['069']],
		'PHPStan\Rules\Comparison\ConstantConditionRuleHelper' => [['070']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper' => [['071']],
		'PHPStan\Rules\FunctionCallParametersCheck' => [['072']],
		'PHPStan\Rules\FunctionDefinitionCheck' => [['073']],
		'PHPStan\Rules\FunctionReturnTypeCheck' => [['074']],
		'PHPStan\Rules\Generics\GenericAncestorsCheck' => [['075']],
		'PHPStan\Rules\Generics\GenericObjectTypeCheck' => [['076']],
		'PHPStan\Rules\Generics\TemplateTypeCheck' => [['077']],
		'PHPStan\Rules\Generics\VarianceCheck' => [['078']],
		'PHPStan\Rules\IssetCheck' => [['079']],
		'PHPStan\Rules\Methods\MethodSignatureRule' => [['080']],
		'PHPStan\Rules\MissingTypehintCheck' => [['081']],
		'PHPStan\Rules\Properties\ReadWritePropertiesExtensionProvider' => [['082']],
		'PHPStan\Rules\Properties\LazyReadWritePropertiesExtensionProvider' => [['082']],
		'PHPStan\Rules\Properties\PropertyDescriptor' => [['083']],
		'PHPStan\Rules\Properties\PropertyReflectionFinder' => [['084']],
		'PHPStan\Rules\RegistryFactory' => [['085']],
		'PHPStan\Rules\RuleLevelHelper' => [['086']],
		'PHPStan\Rules\UnusedFunctionParametersCheck' => [['087']],
		'PHPStan\Type\FileTypeMapper' => [['088']],
		'PHPStan\Type\DynamicFunctionReturnTypeExtension' => [
			[
				'089',
				'090',
				'091',
				'092',
				'093',
				'095',
				'096',
				'097',
				'098',
				'099',
				'0100',
				'0101',
				'0102',
				'0103',
				'0104',
				'0105',
				'0106',
				'0110',
				'0112',
				'0114',
				'0115',
				'0116',
				'0117',
				'0118',
				'0119',
				'0120',
				'0122',
				'0125',
				'0126',
				'0127',
				'0128',
				'0129',
				'0130',
				'0131',
				'0132',
				'0133',
				'0134',
				'0135',
				'0136',
				'0137',
				'0138',
				'0159',
				'0160',
				'0162',
				'0163',
				'0164',
			],
		],
		'PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension' => [['089']],
		'PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension' => [['090']],
		'PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension' => [['091']],
		'PHPStan\Type\Php\ArrayFilterFunctionReturnTypeReturnTypeExtension' => [['092']],
		'PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension' => [['093']],
		'PHPStan\Type\FunctionTypeSpecifyingExtension' => [
			[
				'094',
				'0111',
				'0123',
				'0124',
				'0139',
				'0140',
				'0141',
				'0142',
				'0143',
				'0144',
				'0145',
				'0146',
				'0147',
				'0148',
				'0149',
				'0150',
				'0151',
				'0152',
				'0153',
				'0154',
				'0155',
				'0156',
				'0157',
				'0158',
			],
		],
		'PHPStan\Analyser\TypeSpecifierAwareExtension' => [
			[
				'094',
				'0111',
				'0123',
				'0124',
				'0139',
				'0140',
				'0141',
				'0142',
				'0143',
				'0144',
				'0145',
				'0146',
				'0147',
				'0148',
				'0149',
				'0150',
				'0151',
				'0152',
				'0153',
				'0154',
				'0155',
				'0156',
				'0157',
				'0158',
				'0160',
			],
		],
		'PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension' => [['094']],
		'PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension' => [['095']],
		'PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension' => [['096']],
		'PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension' => [['097']],
		'PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension' => [['098']],
		'PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension' => [['099']],
		'PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension' => [['0100']],
		'PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension' => [['0101']],
		'PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension' => [['0102']],
		'PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension' => [['0103']],
		'PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension' => [['0104']],
		'PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension' => [['0105']],
		'PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension' => [['0106']],
		'PHPStan\Type\DynamicStaticMethodReturnTypeExtension' => [['0107', '0109']],
		'PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension' => [['0107']],
		'PHPStan\Type\DynamicMethodReturnTypeExtension' => [['0108', '0113', '0122', '0161']],
		'PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension' => [['0108']],
		'PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension' => [['0109']],
		'PHPStan\Type\Php\CountFunctionReturnTypeExtension' => [['0110']],
		'PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension' => [['0111']],
		'PHPStan\Type\Php\CurlInitReturnTypeExtension' => [['0112']],
		'PHPStan\Type\Php\DsMapDynamicReturnTypeExtension' => [['0113']],
		'PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension' => [['0114']],
		'PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension' => [['0115']],
		'PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension' => [['0116']],
		'PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension' => [['0117']],
		'PHPStan\Type\Php\GetClassDynamicReturnTypeExtension' => [['0118']],
		'PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension' => [['0119']],
		'PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension' => [['0120']],
		'PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension' => [['0121']],
		'PHPStan\Type\Php\StatDynamicReturnTypeExtension' => [['0122']],
		'PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension' => [['0123']],
		'PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension' => [['0124']],
		'PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension' => [['0125']],
		'PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension' => [['0126']],
		'PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension' => [['0127']],
		'PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension' => [['0128']],
		'PHPStan\Type\Php\VarExportFunctionDynamicReturnTypeExtension' => [['0129']],
		'PHPStan\Type\Php\MbFunctionsReturnTypeExtension' => [['0130']],
		'PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension' => [['0131']],
		'PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension' => [['0132']],
		'PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension' => [['0133']],
		'PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension' => [['0134']],
		'PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension' => [['0135']],
		'PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension' => [['0136']],
		'PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension' => [['0137']],
		'PHPStan\Type\Php\RangeFunctionReturnTypeExtension' => [['0138']],
		'PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension' => [['0139']],
		'PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension' => [['0140']],
		'PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension' => [['0141']],
		'PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension' => [['0142']],
		'PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension' => [['0143']],
		'PHPStan\Type\Php\IsIntFunctionTypeSpecifyingExtension' => [['0144']],
		'PHPStan\Type\Php\IsFloatFunctionTypeSpecifyingExtension' => [['0145']],
		'PHPStan\Type\Php\IsNullFunctionTypeSpecifyingExtension' => [['0146']],
		'PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension' => [['0147']],
		'PHPStan\Type\Php\IsBoolFunctionTypeSpecifyingExtension' => [['0148']],
		'PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension' => [['0149']],
		'PHPStan\Type\Php\IsCountableFunctionTypeSpecifyingExtension' => [['0150']],
		'PHPStan\Type\Php\IsResourceFunctionTypeSpecifyingExtension' => [['0151']],
		'PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension' => [['0152']],
		'PHPStan\Type\Php\IsStringFunctionTypeSpecifyingExtension' => [['0153']],
		'PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension' => [['0154']],
		'PHPStan\Type\Php\IsObjectFunctionTypeSpecifyingExtension' => [['0155']],
		'PHPStan\Type\Php\IsNumericFunctionTypeSpecifyingExtension' => [['0156']],
		'PHPStan\Type\Php\IsScalarFunctionTypeSpecifyingExtension' => [['0157']],
		'PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension' => [['0158']],
		'PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension' => [['0159']],
		'PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension' => [['0160']],
		'PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension' => [['0161']],
		'PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension' => [['0162']],
		'PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension' => [['0163']],
		'PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension' => [['0164']],
		'PHPStan\Analyser\TypeSpecifier' => [['typeSpecifier']],
		'PHPStan\Analyser\TypeSpecifierFactory' => [['typeSpecifierFactory']],
		'PHPStan\File\RelativePathHelper' => [0 => ['relativePathHelper'], 2 => [1 => 'simpleRelativePathHelper']],
		'PHPStan\Reflection\ReflectionProvider' => [
			['reflectionProvider'],
			['broker', 'innerRuntimeReflectionProvider'],
			[2 => 'betterReflectionProvider', 3 => 'runtimeReflectionProvider', 5 => 'stubBetterReflectionProvider'],
		],
		'PHPStan\Broker\Broker' => [['broker']],
		'PHPStan\Broker\BrokerFactory' => [['brokerFactory']],
		'PHPStan\Cache\CacheStorage' => [2 => ['cacheStorage']],
		'PHPStan\Cache\FileCacheStorage' => [2 => ['cacheStorage']],
		'PHPStan\Parser\DirectParser' => [2 => ['directParser']],
		'PHPStan\Parser\PhpParserDecorator' => [2 => ['phpParserDecorator']],
		'PhpParser\Lexer' => [['phpParserLexer']],
		'PHPStan\Rules\Registry' => [['registry']],
		'PHPStan\PhpDoc\StubPhpDocProvider' => [['stubPhpDocProvider']],
		'PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory' => [['reflectionProviderFactory']],
		'PHPStan\Reflection\BetterReflection\BetterReflectionProvider' => [
			0 => ['reflectionProvider'],
			2 => [1 => 'betterReflectionProvider', 'stubBetterReflectionProvider'],
		],
		'_HumbugBoxc7aa196c4c1e\Roave\BetterReflection\Reflector\ClassReflector' => [
			2 => ['betterReflectionClassReflector', 'nodeScopeResolverClassReflector', 'stubClassReflector'],
		],
		'_HumbugBoxc7aa196c4c1e\Roave\BetterReflection\Reflector\Reflector' => [
			2 => [
				'betterReflectionClassReflector',
				'nodeScopeResolverClassReflector',
				'betterReflectionFunctionReflector',
				'betterReflectionConstantReflector',
				'stubClassReflector',
				'stubFunctionReflector',
				'stubConstantReflector',
			],
		],
		'PHPStan\Reflection\BetterReflection\Reflector\MemoizingClassReflector' => [
			2 => ['betterReflectionClassReflector'],
		],
		'_HumbugBoxc7aa196c4c1e\Roave\BetterReflection\Reflector\FunctionReflector' => [
			2 => ['betterReflectionFunctionReflector', 'stubFunctionReflector'],
		],
		'PHPStan\Reflection\BetterReflection\Reflector\MemoizingFunctionReflector' => [
			2 => ['betterReflectionFunctionReflector'],
		],
		'_HumbugBoxc7aa196c4c1e\Roave\BetterReflection\Reflector\ConstantReflector' => [
			2 => ['betterReflectionConstantReflector', 'stubConstantReflector'],
		],
		'PHPStan\Reflection\BetterReflection\Reflector\MemoizingConstantReflector' => [
			2 => ['betterReflectionConstantReflector'],
		],
		'Hoa\Compiler\Llk\Parser' => [['regexParser']],
		'Hoa\File\File' => [['regexGrammarStream']],
		'Hoa\File\Generic' => [['regexGrammarStream']],
		'Hoa\Stream\Stream' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\Stream' => [['regexGrammarStream']],
		'Hoa\Event\Listenable' => [['regexGrammarStream']],
		'Hoa\Event\Source' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\Pathable' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\Statable' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\Touchable' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\Bufferable' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\Lockable' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\Pointable' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\In' => [['regexGrammarStream']],
		'Hoa\File\Read' => [['regexGrammarStream']],
		'PHPStan\Reflection\ReflectionProvider\ClassBlacklistReflectionProvider' => [2 => ['runtimeReflectionProvider']],
		'PHPStan\Reflection\Runtime\RuntimeReflectionProvider' => [['innerRuntimeReflectionProvider']],
		'PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory' => [['0165']],
		'PHPStan\Reflection\BetterReflection\BetterReflectionProviderFactory' => [['0166']],
		'_HumbugBoxc7aa196c4c1e\Roave\BetterReflection\SourceLocator\SourceStubber\SourceStubber' => [
			1 => ['0167', '0168'],
		],
		'_HumbugBoxc7aa196c4c1e\Roave\BetterReflection\SourceLocator\SourceStubber\PhpStormStubsSourceStubber' => [
			['0167'],
		],
		'_HumbugBoxc7aa196c4c1e\Roave\BetterReflection\SourceLocator\SourceStubber\ReflectionSourceStubber' => [['0168']],
		'PHPStan\Command\ErrorFormatter\ErrorFormatter' => [
			[
				'errorFormatter.raw',
				'errorFormatter.baselineNeon',
				'errorFormatter.table',
				'errorFormatter.checkstyle',
				'errorFormatter.json',
				'errorFormatter.junit',
				'errorFormatter.prettyJson',
				'errorFormatter.gitlab',
				'errorFormatter.github',
			],
		],
		'PHPStan\Command\ErrorFormatter\RawErrorFormatter' => [['errorFormatter.raw']],
		'PHPStan\Command\ErrorFormatter\BaselineNeonErrorFormatter' => [['errorFormatter.baselineNeon']],
		'PHPStan\Command\ErrorFormatter\TableErrorFormatter' => [['errorFormatter.table']],
		'PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter' => [['errorFormatter.checkstyle']],
		'PHPStan\Command\ErrorFormatter\JsonErrorFormatter' => [['errorFormatter.json', 'errorFormatter.prettyJson']],
		'PHPStan\Command\ErrorFormatter\JunitErrorFormatter' => [['errorFormatter.junit']],
		'PHPStan\Command\ErrorFormatter\GitlabErrorFormatter' => [['errorFormatter.gitlab']],
		'PHPStan\Command\ErrorFormatter\GithubErrorFormatter' => [['errorFormatter.github']],
		'PHPStan\Rules\Classes\ExistingClassInInstanceOfRule' => [['0169']],
		'PHPStan\Rules\Exceptions\CaughtExceptionExistenceRule' => [['0170']],
		'PHPStan\Rules\Functions\CallToNonExistentFunctionRule' => [['0171']],
		'PHPStan\Rules\Functions\ClosureUsesThisRule' => [['0172']],
		'PHPStan\Rules\Methods\CallMethodsRule' => [['0173']],
		'PHPStan\Rules\Methods\CallStaticMethodsRule' => [['0174']],
		'PHPStan\Rules\Methods\OverridingMethodRule' => [['0175']],
		'PHPStan\Rules\Missing\MissingClosureNativeReturnTypehintRule' => [['0176']],
		'PHPStan\Rules\Missing\MissingReturnRule' => [['0177']],
		'PHPStan\Rules\Namespaces\ExistingNamesInGroupUseRule' => [['0178']],
		'PHPStan\Rules\Namespaces\ExistingNamesInUseRule' => [['0179']],
		'PHPStan\Rules\Operators\InvalidIncDecOperationRule' => [['0180']],
		'PHPStan\Rules\Properties\AccessPropertiesRule' => [['0181']],
		'PHPStan\Rules\Properties\AccessStaticPropertiesRule' => [['0182']],
		'PHPStan\Rules\Properties\ExistingClassesInPropertiesRule' => [['0183']],
		'PHPStan\Rules\Properties\UninitializedPropertyRule' => [['0184']],
		'PHPStan\Rules\Properties\WritingToReadOnlyPropertiesRule' => [['0185']],
		'PHPStan\Rules\Properties\ReadingWriteOnlyPropertiesRule' => [['0186']],
		'PHPStan\Rules\Variables\CompactVariablesRule' => [['0187']],
		'PHPStan\Rules\Variables\DefinedVariableRule' => [['0188']],
		'PHPStan\Rules\Variables\DefinedVariableInAnonymousFunctionUseRule' => [['0189']],
		'PHPStan\Rules\Regexp\RegularExpressionPatternRule' => [['0190']],
		'PHPStan\Rules\Whitespace\FileWhitespaceRule' => [['0191']],
		'PHPStan\Rules\Variables\VariableCertaintyNullCoalesceRule' => [['0192']],
		'PHPStan\Rules\Classes\MixinRule' => [['0193']],
		'PHPStan\Rules\Functions\CallCallablesRule' => [['0194']],
		'PHPStan\Rules\PhpDoc\InvalidPhpDocVarTagTypeRule' => [['0195']],
		'PHPStan\Rules\Arrays\AppendedArrayKeyTypeRule' => [['0196']],
		'PHPStan\Rules\Arrays\InvalidKeyInArrayDimFetchRule' => [['0197']],
		'PHPStan\Rules\Arrays\InvalidKeyInArrayItemRule' => [['0198']],
		'PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchRule' => [['0199']],
		'PHPStan\Rules\Functions\ReturnTypeRule' => [['0200']],
		'PHPStan\Rules\Generators\YieldFromTypeRule' => [['0201']],
		'PHPStan\Rules\Generators\YieldInGeneratorRule' => [['0202']],
		'PHPStan\Rules\Classes\ImpossibleInstanceOfRule' => [['0203']],
		'PHPStan\Rules\Comparison\BooleanAndConstantConditionRule' => [['0204']],
		'PHPStan\Rules\Comparison\BooleanOrConstantConditionRule' => [['0205']],
		'PHPStan\Rules\Comparison\BooleanNotConstantConditionRule' => [['0206']],
		'PHPStan\Rules\DeadCode\UnusedPrivateConstantRule' => [['0207']],
		'PHPStan\Rules\DeadCode\UnusedPrivateMethodRule' => [['0208']],
		'PHPStan\Rules\DeadCode\UnusedPrivatePropertyRule' => [['0209']],
		'PHPStan\Rules\Comparison\ElseIfConstantConditionRule' => [['0210']],
		'PHPStan\Rules\Comparison\IfConstantConditionRule' => [['0211']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeFunctionCallRule' => [['0212']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeMethodCallRule' => [['0213']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeStaticMethodCallRule' => [['0214']],
		'PHPStan\Rules\Comparison\StrictComparisonOfDifferentTypesRule' => [['0215']],
		'PHPStan\Rules\Comparison\TernaryOperatorConstantConditionRule' => [['0216']],
		'PHPStan\Rules\Comparison\UnreachableIfBranchesRule' => [['0217']],
		'PHPStan\Rules\Comparison\UnreachableTernaryElseBranchRule' => [['0218']],
		'PHPStan\Rules\TooWideTypehints\TooWideMethodReturnTypehintRule' => [['0219']],
		'PHPStan\Rules\Variables\IssetRule' => [['0220']],
		'PHPStan\Rules\Variables\NullCoalesceRule' => [['0221']],
		'PHPStan\Rules\Functions\RandomIntParametersRule' => [['0222']],
		'PHPStan\PhpDoc\StubSourceLocatorFactory' => [['0223']],
	];


	public function __construct(array $params = [])
	{
		parent::__construct($params);
		$this->parameters += [
			'bootstrap' => null,
			'bootstrapFiles' => [
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/runtime/ReflectionUnionType.php',
			],
			'excludes_analyse' => [],
			'autoload_directories' => [],
			'autoload_files' => [],
			'level' => 5,
			'paths' => ['/home/umar/sites/fibonacci-flix-test/src', '/home/umar/sites/fibonacci-flix-test/tests'],
			'featureToggles' => [
				'bleedingEdge' => false,
				'disableRuntimeReflectionProvider' => false,
				'closureUsesThis' => false,
				'randomIntParameters' => false,
				'nullCoalesce' => false,
				'fileWhitespace' => false,
				'unusedClassElements' => false,
				'readComposerPhpVersion' => false,
			],
			'fileExtensions' => ['php'],
			'checkAlwaysTrueCheckTypeFunctionCall' => false,
			'checkAlwaysTrueInstanceof' => false,
			'checkAlwaysTrueStrictComparison' => false,
			'checkClassCaseSensitivity' => true,
			'checkExplicitMixed' => false,
			'checkFunctionArgumentTypes' => true,
			'checkFunctionNameCase' => false,
			'checkGenericClassInNonGenericObjectType' => true,
			'checkMissingIterableValueType' => true,
			'checkMissingVarTagTypehint' => true,
			'checkArgumentsPassedByReference' => true,
			'checkMaybeUndefinedVariables' => true,
			'checkNullables' => true,
			'checkThisOnly' => false,
			'checkUnionTypes' => true,
			'checkExplicitMixedMissingReturn' => false,
			'checkPhpDocMissingReturn' => true,
			'checkPhpDocMethodSignatures' => true,
			'checkExtraArguments' => true,
			'checkMissingClosureNativeReturnTypehintRule' => false,
			'checkMissingTypehints' => true,
			'checkTooWideReturnTypesInProtectedAndPublicMethods' => false,
			'checkUninitializedProperties' => false,
			'inferPrivatePropertyTypeFromConstructor' => true,
			'reportMaybes' => true,
			'reportMaybesInMethodSignatures' => false,
			'reportStaticMethodSignatures' => false,
			'mixinExcludeClasses' => [],
			'scanFiles' => [],
			'scanDirectories' => [],
			'parallel' => [
				'jobSize' => 20,
				'processTimeout' => 60.0,
				'maximumNumberOfProcesses' => 32,
				'minimumNumberOfJobsPerProcess' => 2,
				'buffer' => 134217728,
			],
			'phpVersion' => null,
			'polluteScopeWithLoopInitialAssignments' => true,
			'polluteScopeWithAlwaysIterableForeach' => true,
			'polluteCatchScopeWithTryAssignments' => false,
			'propertyAlwaysWrittenTags' => [],
			'propertyAlwaysReadTags' => [],
			'additionalConstructors' => [],
			'treatPhpDocTypesAsCertain' => true,
			'tipsOfTheDay' => true,
			'reportMagicMethods' => true,
			'reportMagicProperties' => true,
			'ignoreErrors' => [],
			'internalErrorsCountLimit' => 50,
			'cache' => ['nodesByFileCountMax' => 512, 'nodesByStringCountMax' => 512],
			'reportUnmatchedIgnoredErrors' => true,
			'scopeClass' => 'PHPStan\Analyser\MutatingScope',
			'typeAliases' => [],
			'universalObjectCratesClasses' => ['stdClass'],
			'stubFiles' => [
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/ReflectionClass.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/iterable.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/ArrayObject.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/WeakReference.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/ext-ds.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/PDOStatement.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/ReflectionFunctionAbstract.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/date.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/zip.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/dom.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/spl.stub',
			],
			'earlyTerminatingMethodCalls' => [],
			'earlyTerminatingFunctionCalls' => [],
			'memoryLimitFile' => '/home/umar/sites/fibonacci-flix-test/var/cache/ecs/.memory_limit',
			'staticReflectionClassNamePatterns' => ['#^PhpParser\\\#', '#^PHPStan\\\#', '#^Hoa\\\#'],
			'dynamicConstantNames' => [
				'ICONV_IMPL',
				'LIBXML_VERSION',
				'LIBXML_DOTTED_VERSION',
				'PHP_VERSION',
				'PHP_MAJOR_VERSION',
				'PHP_MINOR_VERSION',
				'PHP_RELEASE_VERSION',
				'PHP_VERSION_ID',
				'PHP_EXTRA_VERSION',
				'PHP_ZTS',
				'PHP_DEBUG',
				'PHP_MAXPATHLEN',
				'PHP_OS',
				'PHP_OS_FAMILY',
				'PHP_SAPI',
				'PHP_EOL',
				'PHP_INT_MAX',
				'PHP_INT_MIN',
				'PHP_INT_SIZE',
				'PHP_FLOAT_DIG',
				'PHP_FLOAT_EPSILON',
				'PHP_FLOAT_MIN',
				'PHP_FLOAT_MAX',
				'DEFAULT_INCLUDE_PATH',
				'PEAR_INSTALL_DIR',
				'PEAR_EXTENSION_DIR',
				'PHP_EXTENSION_DIR',
				'PHP_PREFIX',
				'PHP_BINDIR',
				'PHP_BINARY',
				'PHP_MANDIR',
				'PHP_LIBDIR',
				'PHP_DATADIR',
				'PHP_SYSCONFDIR',
				'PHP_LOCALSTATEDIR',
				'PHP_CONFIG_FILE_PATH',
				'PHP_CONFIG_FILE_SCAN_DIR',
				'PHP_SHLIB_SUFFIX',
				'PHP_FD_SETSIZE',
			],
			'customRulesetUsed' => false,
			'missingClosureNativeReturnCheckObjectTypehint' => false,
			'tmpDir' => '/home/umar/sites/fibonacci-flix-test/var/cache/ecs',
			'debugMode' => true,
			'productionMode' => false,
			'tempDir' => '/home/umar/sites/fibonacci-flix-test/var/cache/ecs',
			'rootDir' => '/home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan',
			'currentWorkingDirectory' => '/home/umar/sites/fibonacci-flix-test',
			'cliArgumentsVariablesRegistered' => true,
			'additionalConfigFiles' => [
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/conf/config.level8.neon',
				'/home/umar/sites/fibonacci-flix-test/phpstan.neon',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/src/PhpDoc/../../conf/config.stubValidator.neon',
			],
			'analysedPaths' => ['/home/umar/sites/fibonacci-flix-test/src', '/home/umar/sites/fibonacci-flix-test/tests'],
			'composerAutoloaderProjectPaths' => [
				'/home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/..',
				'/home/umar/sites/fibonacci-flix-test',
			],
			'analysedPathsFromConfig' => [],
			'allCustomConfigFiles' => ['/home/umar/sites/fibonacci-flix-test/phpstan.neon'],
			'usedLevel' => '8',
			'cliAutoloadFile' => null,
			'singleReflectionFile' => null,
			'__parametersSchema' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Structure', [
				"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00items" => [
					'bootstrap' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'string|null',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'bootstrapFiles' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'excludes_analyse' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'autoload_directories' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'autoload_files' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'level' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\AnyOf', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\AnyOf\x00set" => [
							\_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							\_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							null,
						],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\AnyOf\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\AnyOf\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\AnyOf\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\AnyOf\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\AnyOf\x00castTo" => null,
					]),
					'paths' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'featureToggles' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Structure', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00items" => [
							'bleedingEdge' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'disableRuntimeReflectionProvider' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'closureUsesThis' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'randomIntParameters' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'nullCoalesce' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'fileWhitespace' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'unusedClassElements' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'readComposerPhpVersion' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
						],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
					]),
					'fileExtensions' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkAlwaysTrueCheckTypeFunctionCall' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkAlwaysTrueInstanceof' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkAlwaysTrueStrictComparison' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkClassCaseSensitivity' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkExplicitMixed' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkFunctionArgumentTypes' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkFunctionNameCase' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkGenericClassInNonGenericObjectType' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkMissingIterableValueType' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkMissingVarTagTypehint' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkArgumentsPassedByReference' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkMaybeUndefinedVariables' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkNullables' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkThisOnly' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkUnionTypes' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkExplicitMixedMissingReturn' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkPhpDocMissingReturn' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkPhpDocMethodSignatures' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkExtraArguments' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkMissingClosureNativeReturnTypehintRule' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkMissingTypehints' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkTooWideReturnTypesInProtectedAndPublicMethods' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkUninitializedProperties' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'inferPrivatePropertyTypeFromConstructor' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'tipsOfTheDay' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'reportMaybes' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'reportMaybesInMethodSignatures' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'reportStaticMethodSignatures' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'parallel' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Structure', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00items" => [
							'jobSize' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'processTimeout' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'float',
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'maximumNumberOfProcesses' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'minimumNumberOfJobsPerProcess' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'buffer' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
						],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
					]),
					'phpVersion' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\AnyOf', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\AnyOf\x00set" => [
							\_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [70100.0, 80000.0],
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							null,
						],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\AnyOf\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\AnyOf\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\AnyOf\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\AnyOf\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\AnyOf\x00castTo" => null,
					]),
					'polluteScopeWithLoopInitialAssignments' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'polluteScopeWithAlwaysIterableForeach' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'polluteCatchScopeWithTryAssignments' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'propertyAlwaysWrittenTags' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'propertyAlwaysReadTags' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'additionalConstructors' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'treatPhpDocTypesAsCertain' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'reportMagicMethods' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'reportMagicProperties' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'ignoreErrors' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\AnyOf', [
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\AnyOf\x00set" => [
								\_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
									"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
									"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
									"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
									"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
									"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
									"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
									"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
									"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
									"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
								]),
								\_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Structure', [
									"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00items" => [
										'message' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [
												null,
												null,
											],
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
										'path' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [
												null,
												null,
											],
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
									],
									"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
									"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
									"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00required" => true,
									"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00default" => null,
									"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00before" => null,
									"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
									"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
								]),
								\_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Structure', [
									"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00items" => [
										'message' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [
												null,
												null,
											],
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
										'count' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [
												null,
												null,
											],
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
										'path' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [
												null,
												null,
											],
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
									],
									"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
									"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
									"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00required" => true,
									"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00default" => null,
									"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00before" => null,
									"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
									"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
								]),
								\_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Structure', [
									"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00items" => [
										'message' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [
												null,
												null,
											],
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
										'paths' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
												"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
												"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
												"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [
													null,
													null,
												],
												"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
												"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
												"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
												"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
												"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
												"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
											]),
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [
												null,
												null,
											],
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => [],
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
									],
									"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
									"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
									"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00required" => true,
									"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00default" => null,
									"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00before" => null,
									"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
									"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
								]),
							],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\AnyOf\x00required" => true,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\AnyOf\x00default" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\AnyOf\x00before" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\AnyOf\x00asserts" => [],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\AnyOf\x00castTo" => null,
						]),
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'internalErrorsCountLimit' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'cache' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Structure', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00items" => [
							'nodesByFileCountMax' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'nodesByStringCountMax' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
						],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
					]),
					'reportUnmatchedIgnoredErrors' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'scopeClass' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'typeAliases' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'array',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'universalObjectCratesClasses' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'stubFiles' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'earlyTerminatingMethodCalls' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'array',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => [],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'earlyTerminatingFunctionCalls' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'memoryLimitFile' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'staticReflectionClassNamePatterns' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'dynamicConstantNames' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'customRulesetUsed' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'rootDir' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'tmpDir' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'currentWorkingDirectory' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'cliArgumentsVariablesRegistered' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'mixinExcludeClasses' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'scanFiles' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'scanDirectories' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'debugMode' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'productionMode' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'tempDir' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'additionalConfigFiles' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'allCustomConfigFiles' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'analysedPaths' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'composerAutoloaderProjectPaths' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'analysedPathsFromConfig' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'usedLevel' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'cliAutoloadFile' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'string|null',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'singleReflectionFile' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'string|null',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'missingClosureNativeReturnCheckObjectTypehint' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'__parametersSchema' => \_HumbugBoxc7aa196c4c1e\Nette\PhpGenerator\Dumper::createObject('_HumbugBoxc7aa196c4c1e\Nette\Schema\Elements\Type', [
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00type" => '_HumbugBoxc7aa196c4c1e\Nette\Schema\Schema',
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
				],
				"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
				"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
				"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00required" => true,
				"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00default" => null,
				"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00before" => null,
				"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
				"\x00_HumbugBoxc7aa196c4c1e\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
			]),
		];
	}


	public function createService01(): PhpParser\BuilderFactory
	{
		return new PhpParser\BuilderFactory;
	}


	public function createService02(): PHPStan\Parser\LexerFactory
	{
		return new PHPStan\Parser\LexerFactory($this->getService('08'));
	}


	public function createService03(): PhpParser\NodeTraverser
	{
		$service = new PhpParser\NodeTraverser;
		$service->addVisitor($this->getService('04'));
		return $service;
	}


	public function createService04(): PhpParser\NodeVisitor\NameResolver
	{
		return new PhpParser\NodeVisitor\NameResolver;
	}


	public function createService05(): PhpParser\Parser\Php7
	{
		return new PhpParser\Parser\Php7($this->getService('phpParserLexer'));
	}


	public function createService06(): PhpParser\PrettyPrinter\Standard
	{
		return new PhpParser\PrettyPrinter\Standard;
	}


	public function createService07(): PHPStan\Broker\AnonymousClassNameHelper
	{
		return new PHPStan\Broker\AnonymousClassNameHelper($this->getService('041'), $this->getService('simpleRelativePathHelper'));
	}


	public function createService08(): PHPStan\Php\PhpVersion
	{
		return $this->getService('09')->create();
	}


	public function createService09(): PHPStan\Php\PhpVersionFactory
	{
		return $this->getService('010')->create();
	}


	public function createService010(): PHPStan\Php\PhpVersionFactoryFactory
	{
		return new PHPStan\Php\PhpVersionFactoryFactory(
			null,
			false,
			['/home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/..', '/home/umar/sites/fibonacci-flix-test']
		);
	}


	public function createService011(): PHPStan\PhpDocParser\Lexer\Lexer
	{
		return new PHPStan\PhpDocParser\Lexer\Lexer;
	}


	public function createService012(): PHPStan\PhpDocParser\Parser\TypeParser
	{
		return new PHPStan\PhpDocParser\Parser\TypeParser($this->getService('013'));
	}


	public function createService013(): PHPStan\PhpDocParser\Parser\ConstExprParser
	{
		return new PHPStan\PhpDocParser\Parser\ConstExprParser;
	}


	public function createService014(): PHPStan\PhpDocParser\Parser\PhpDocParser
	{
		return new PHPStan\PhpDocParser\Parser\PhpDocParser($this->getService('012'), $this->getService('013'));
	}


	public function createService015(): PHPStan\PhpDoc\PhpDocInheritanceResolver
	{
		return new PHPStan\PhpDoc\PhpDocInheritanceResolver($this->getService('088'));
	}


	public function createService016(): PHPStan\PhpDoc\PhpDocNodeResolver
	{
		return new PHPStan\PhpDoc\PhpDocNodeResolver($this->getService('020'), $this->getService('018'));
	}


	public function createService017(): PHPStan\PhpDoc\PhpDocStringResolver
	{
		return new PHPStan\PhpDoc\PhpDocStringResolver($this->getService('011'), $this->getService('014'));
	}


	public function createService018(): PHPStan\PhpDoc\ConstExprNodeResolver
	{
		return new PHPStan\PhpDoc\ConstExprNodeResolver;
	}


	public function createService019(): PHPStan\PhpDoc\TypeAlias\TypeAliasesTypeNodeResolverExtension
	{
		return new PHPStan\PhpDoc\TypeAlias\TypeAliasesTypeNodeResolverExtension(
			$this->getService('022'),
			$this->getService('reflectionProvider'),
			[]
		);
	}


	public function createService020(): PHPStan\PhpDoc\TypeNodeResolver
	{
		return new PHPStan\PhpDoc\TypeNodeResolver($this->getService('021'), $this->getService('035'));
	}


	public function createService021(): PHPStan\PhpDoc\TypeNodeResolverExtensionRegistryProvider
	{
		return new PHPStan\PhpDoc\LazyTypeNodeResolverExtensionRegistryProvider($this->getService('035'));
	}


	public function createService022(): PHPStan\PhpDoc\TypeStringResolver
	{
		return new PHPStan\PhpDoc\TypeStringResolver($this->getService('011'), $this->getService('012'), $this->getService('020'));
	}


	public function createService023(): PHPStan\PhpDoc\StubValidator
	{
		return new PHPStan\PhpDoc\StubValidator(
			[
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/ReflectionClass.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/iterable.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/ArrayObject.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/WeakReference.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/ext-ds.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/PDOStatement.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/ReflectionFunctionAbstract.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/date.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/zip.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/dom.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/spl.stub',
			],
			$this->getService('037')
		);
	}


	public function createService024(): PHPStan\Analyser\Analyser
	{
		return new PHPStan\Analyser\Analyser($this->getService('025'), $this->getService('registry'), $this->getService('028'), 50);
	}


	public function createService025(): PHPStan\Analyser\FileAnalyser
	{
		return new PHPStan\Analyser\FileAnalyser(
			$this->getService('027'),
			$this->getService('028'),
			$this->getService('046'),
			$this->getService('034'),
			$this->getService('041'),
			true
		);
	}


	public function createService026(): PHPStan\Analyser\IgnoredErrorHelper
	{
		return new PHPStan\Analyser\IgnoredErrorHelper($this->getService('032'), $this->getService('041'), [], true);
	}


	public function createService027(): PHPStan\Analyser\LazyScopeFactory
	{
		return new PHPStan\Analyser\LazyScopeFactory('PHPStan\Analyser\MutatingScope', $this->getService('035'));
	}


	public function createService028(): PHPStan\Analyser\NodeScopeResolver
	{
		return new PHPStan\Analyser\NodeScopeResolver(
			$this->getService('reflectionProvider'),
			$this->getService('nodeScopeResolverClassReflector'),
			$this->getService('038'),
			$this->getService('046'),
			$this->getService('088'),
			$this->getService('015'),
			$this->getService('041'),
			$this->getService('typeSpecifier'),
			true,
			false,
			true,
			[],
			[]
		);
	}


	public function createService029(): PHPStan\Analyser\ResultCache\ResultCacheManager
	{
		return new PHPStan\Analyser\ResultCache\ResultCacheManager(
			'/home/umar/sites/fibonacci-flix-test/var/cache/ecs/resultCache.php',
			['/home/umar/sites/fibonacci-flix-test/phpstan.neon'],
			['/home/umar/sites/fibonacci-flix-test/src', '/home/umar/sites/fibonacci-flix-test/tests'],
			['/home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/..', '/home/umar/sites/fibonacci-flix-test'],
			[
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/ReflectionClass.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/iterable.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/ArrayObject.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/WeakReference.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/ext-ds.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/PDOStatement.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/ReflectionFunctionAbstract.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/date.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/zip.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/dom.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/spl.stub',
			],
			'8',
			null
		);
	}


	public function createService030(): PHPStan\Cache\Cache
	{
		return new PHPStan\Cache\Cache($this->getService('cacheStorage'));
	}


	public function createService031(): PHPStan\Command\AnalyseApplication
	{
		return new PHPStan\Command\AnalyseApplication(
			$this->getService('024'),
			$this->getService('023'),
			$this->getService('044'),
			$this->getService('045'),
			$this->getService('029'),
			$this->getService('026'),
			'/home/umar/sites/fibonacci-flix-test/var/cache/ecs/.memory_limit',
			50
		);
	}


	public function createService032(): PHPStan\Command\IgnoredRegexValidator
	{
		return new PHPStan\Command\IgnoredRegexValidator($this->getService('regexParser'), $this->getService('022'));
	}


	public function createService033(): PHPStan\Dependency\DependencyDumper
	{
		return new PHPStan\Dependency\DependencyDumper(
			$this->getService('034'),
			$this->getService('028'),
			$this->getService('041'),
			$this->getService('046'),
			$this->getService('027'),
			$this->getService('043')
		);
	}


	public function createService034(): PHPStan\Dependency\DependencyResolver
	{
		return new PHPStan\Dependency\DependencyResolver($this->getService('reflectionProvider'));
	}


	public function createService035(): PHPStan\DependencyInjection\Container
	{
		return new PHPStan\DependencyInjection\MemoizingContainer($this->getService('036'));
	}


	public function createService036(): PHPStan\DependencyInjection\Nette\NetteContainer
	{
		return new PHPStan\DependencyInjection\Nette\NetteContainer($this);
	}


	public function createService037(): PHPStan\DependencyInjection\DerivativeContainerFactory
	{
		return new PHPStan\DependencyInjection\DerivativeContainerFactory(
			'/home/umar/sites/fibonacci-flix-test',
			'/home/umar/sites/fibonacci-flix-test/var/cache/ecs',
			[
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/conf/config.level8.neon',
				'/home/umar/sites/fibonacci-flix-test/phpstan.neon',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/src/PhpDoc/../../conf/config.stubValidator.neon',
			],
			['/home/umar/sites/fibonacci-flix-test/src', '/home/umar/sites/fibonacci-flix-test/tests'],
			['/home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/..', '/home/umar/sites/fibonacci-flix-test'],
			[],
			['/home/umar/sites/fibonacci-flix-test/phpstan.neon'],
			'8'
		);
	}


	public function createService038(): PHPStan\DependencyInjection\Reflection\ClassReflectionExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Reflection\LazyClassReflectionExtensionRegistryProvider($this->getService('035'));
	}


	public function createService039(): PHPStan\DependencyInjection\Type\DynamicReturnTypeExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyDynamicReturnTypeExtensionRegistryProvider($this->getService('035'));
	}


	public function createService040(): PHPStan\DependencyInjection\Type\OperatorTypeSpecifyingExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyOperatorTypeSpecifyingExtensionRegistryProvider($this->getService('035'));
	}


	public function createService041(): PHPStan\File\FileHelper
	{
		return new PHPStan\File\FileHelper('/home/umar/sites/fibonacci-flix-test');
	}


	public function createService042(): PHPStan\File\FileExcluder
	{
		return new PHPStan\File\FileExcluder(
			$this->getService('041'),
			[],
			[
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/ReflectionClass.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/iterable.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/ArrayObject.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/WeakReference.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/ext-ds.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/PDOStatement.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/ReflectionFunctionAbstract.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/date.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/zip.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/dom.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/spl.stub',
			]
		);
	}


	public function createService043(): PHPStan\File\FileFinder
	{
		return new PHPStan\File\FileFinder($this->getService('042'), $this->getService('041'), ['php']);
	}


	public function createService044(): PHPStan\Parallel\ParallelAnalyser
	{
		return new PHPStan\Parallel\ParallelAnalyser(50, 60.0, 134217728);
	}


	public function createService045(): PHPStan\Parallel\Scheduler
	{
		return new PHPStan\Parallel\Scheduler(20, 32, 2);
	}


	public function createService046(): PHPStan\Parser\CachedParser
	{
		return new PHPStan\Parser\CachedParser($this->getService('directParser'), 512, 512);
	}


	public function createService047(): PHPStan\Parser\FunctionCallStatementFinder
	{
		return new PHPStan\Parser\FunctionCallStatementFinder;
	}


	public function createService048(): PHPStan\Reflection\FunctionReflectionFactory
	{
		return new class ($this) implements PHPStan\Reflection\FunctionReflectionFactory {
			private $container;


			public function __construct(Container_c2fe5982f5 $container)
			{
				$this->container = $container;
			}


			public function create(
				ReflectionFunction $reflection,
				PHPStan\Type\Generic\TemplateTypeMap $templateTypeMap,
				array $phpDocParameterTypes,
				?PHPStan\Type\Type $phpDocReturnType,
				?PHPStan\Type\Type $phpDocThrowType,
				?string $deprecatedDescription,
				bool $isDeprecated,
				bool $isInternal,
				bool $isFinal,
				$filename
			): PHPStan\Reflection\Php\PhpFunctionReflection {
				return new PHPStan\Reflection\Php\PhpFunctionReflection(
					$reflection,
					$this->container->getService('046'),
					$this->container->getService('047'),
					$this->container->getService('030'),
					$templateTypeMap,
					$phpDocParameterTypes,
					$phpDocReturnType,
					$phpDocThrowType,
					$deprecatedDescription,
					$isDeprecated,
					$isInternal,
					$isFinal,
					$filename
				);
			}
		};
	}


	public function createService049(): PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension;
	}


	public function createService050(): PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension
	{
		return new PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension;
	}


	public function createService051(): PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor;
	}


	public function createService052(): PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher(
			$this->getService('051'),
			$this->getService('phpParserDecorator')
		);
	}


	public function createService053(): PHPStan\Reflection\BetterReflection\SourceLocator\AutoloadSourceLocator
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\AutoloadSourceLocator($this->getService('052'));
	}


	public function createService054(): PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker(
			$this->getService('056'),
			$this->getService('059'),
			$this->getService('057')
		);
	}


	public function createService055(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory
	{
		return new class ($this) implements PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory {
			private $container;


			public function __construct(Container_c2fe5982f5 $container)
			{
				$this->container = $container;
			}


			public function create(string $directory): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocator
			{
				return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocator(
					$this->container->getService('052'),
					$this->container->getService('043'),
					$directory
				);
			}
		};
	}


	public function createService056(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository($this->getService('055'));
	}


	public function createService057(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory
	{
		return new class ($this) implements PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory {
			private $container;


			public function __construct(Container_c2fe5982f5 $container)
			{
				$this->container = $container;
			}


			public function create(_HumbugBoxc7aa196c4c1e\Roave\BetterReflection\SourceLocator\Type\Composer\Psr\PsrAutoloaderMapping $mapping): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocator
			{
				return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocator($mapping, $this->container->getService('059'));
			}
		};
	}


	public function createService058(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory
	{
		return new class ($this) implements PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory {
			private $container;


			public function __construct(Container_c2fe5982f5 $container)
			{
				$this->container = $container;
			}


			public function create(string $fileName): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocator
			{
				return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocator(
					$this->container->getService('052'),
					$fileName
				);
			}
		};
	}


	public function createService059(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository($this->getService('058'));
	}


	public function createService060(): PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension([]);
	}


	public function createService061(): PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension
	{
		return new PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension([]);
	}


	public function createService062(): PHPStan\Reflection\Php\PhpClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\PhpClassReflectionExtension(
			$this->getService('027'),
			$this->getService('028'),
			$this->getService('063'),
			$this->getService('015'),
			$this->getService('049'),
			$this->getService('050'),
			$this->getService('068'),
			$this->getService('046'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('reflectionProvider'),
			true,
			['stdClass']
		);
	}


	public function createService063(): PHPStan\Reflection\Php\PhpMethodReflectionFactory
	{
		return new class ($this) implements PHPStan\Reflection\Php\PhpMethodReflectionFactory {
			private $container;


			public function __construct(Container_c2fe5982f5 $container)
			{
				$this->container = $container;
			}


			public function create(
				PHPStan\Reflection\ClassReflection $declaringClass,
				?PHPStan\Reflection\ClassReflection $declaringTrait,
				PHPStan\Reflection\Php\BuiltinMethodReflection $reflection,
				PHPStan\Type\Generic\TemplateTypeMap $templateTypeMap,
				array $phpDocParameterTypes,
				?PHPStan\Type\Type $phpDocReturnType,
				?PHPStan\Type\Type $phpDocThrowType,
				?string $deprecatedDescription,
				bool $isDeprecated,
				bool $isInternal,
				bool $isFinal,
				?string $stubPhpDocString
			): PHPStan\Reflection\Php\PhpMethodReflection {
				return new PHPStan\Reflection\Php\PhpMethodReflection(
					$declaringClass,
					$declaringTrait,
					$reflection,
					$this->container->getService('reflectionProvider'),
					$this->container->getService('046'),
					$this->container->getService('047'),
					$this->container->getService('030'),
					$templateTypeMap,
					$phpDocParameterTypes,
					$phpDocReturnType,
					$phpDocThrowType,
					$deprecatedDescription,
					$isDeprecated,
					$isInternal,
					$isFinal,
					$stubPhpDocString
				);
			}
		};
	}


	public function createService064(): PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension(['stdClass']);
	}


	public function createService065(): PHPStan\Reflection\ReflectionProvider\ReflectionProviderProvider
	{
		return new PHPStan\Reflection\ReflectionProvider\LazyReflectionProviderProvider($this->getService('035'));
	}


	public function createService066(): PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider
	{
		return new PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider($this->getService('068'));
	}


	public function createService067(): PHPStan\Reflection\SignatureMap\SignatureMapParser
	{
		return new PHPStan\Reflection\SignatureMap\SignatureMapParser($this->getService('022'));
	}


	public function createService068(): PHPStan\Reflection\SignatureMap\SignatureMapProvider
	{
		return new PHPStan\Reflection\SignatureMap\SignatureMapProvider($this->getService('067'), $this->getService('08'));
	}


	public function createService069(): PHPStan\Rules\ClassCaseSensitivityCheck
	{
		return new PHPStan\Rules\ClassCaseSensitivityCheck($this->getService('reflectionProvider'));
	}


	public function createService070(): PHPStan\Rules\Comparison\ConstantConditionRuleHelper
	{
		return new PHPStan\Rules\Comparison\ConstantConditionRuleHelper($this->getService('071'), true);
	}


	public function createService071(): PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper
	{
		return new PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper(
			$this->getService('reflectionProvider'),
			$this->getService('typeSpecifier'),
			['stdClass'],
			true
		);
	}


	public function createService072(): PHPStan\Rules\FunctionCallParametersCheck
	{
		return new PHPStan\Rules\FunctionCallParametersCheck($this->getService('086'), true, true, true, true);
	}


	public function createService073(): PHPStan\Rules\FunctionDefinitionCheck
	{
		return new PHPStan\Rules\FunctionDefinitionCheck(
			$this->getService('reflectionProvider'),
			$this->getService('069'),
			$this->getService('08'),
			true,
			false
		);
	}


	public function createService074(): PHPStan\Rules\FunctionReturnTypeCheck
	{
		return new PHPStan\Rules\FunctionReturnTypeCheck($this->getService('086'));
	}


	public function createService075(): PHPStan\Rules\Generics\GenericAncestorsCheck
	{
		return new PHPStan\Rules\Generics\GenericAncestorsCheck(
			$this->getService('reflectionProvider'),
			$this->getService('076'),
			$this->getService('078'),
			true
		);
	}


	public function createService076(): PHPStan\Rules\Generics\GenericObjectTypeCheck
	{
		return new PHPStan\Rules\Generics\GenericObjectTypeCheck;
	}


	public function createService077(): PHPStan\Rules\Generics\TemplateTypeCheck
	{
		return new PHPStan\Rules\Generics\TemplateTypeCheck($this->getService('reflectionProvider'), $this->getService('069'), [], true);
	}


	public function createService078(): PHPStan\Rules\Generics\VarianceCheck
	{
		return new PHPStan\Rules\Generics\VarianceCheck;
	}


	public function createService079(): PHPStan\Rules\IssetCheck
	{
		return new PHPStan\Rules\IssetCheck($this->getService('083'), $this->getService('084'));
	}


	public function createService080(): PHPStan\Rules\Methods\MethodSignatureRule
	{
		return new PHPStan\Rules\Methods\MethodSignatureRule(false, false);
	}


	public function createService081(): PHPStan\Rules\MissingTypehintCheck
	{
		return new PHPStan\Rules\MissingTypehintCheck($this->getService('reflectionProvider'), true, true);
	}


	public function createService082(): PHPStan\Rules\Properties\LazyReadWritePropertiesExtensionProvider
	{
		return new PHPStan\Rules\Properties\LazyReadWritePropertiesExtensionProvider($this->getService('035'));
	}


	public function createService083(): PHPStan\Rules\Properties\PropertyDescriptor
	{
		return new PHPStan\Rules\Properties\PropertyDescriptor;
	}


	public function createService084(): PHPStan\Rules\Properties\PropertyReflectionFinder
	{
		return new PHPStan\Rules\Properties\PropertyReflectionFinder;
	}


	public function createService085(): PHPStan\Rules\RegistryFactory
	{
		return new PHPStan\Rules\RegistryFactory($this->getService('035'));
	}


	public function createService086(): PHPStan\Rules\RuleLevelHelper
	{
		return new PHPStan\Rules\RuleLevelHelper($this->getService('reflectionProvider'), true, false, true);
	}


	public function createService087(): PHPStan\Rules\UnusedFunctionParametersCheck
	{
		return new PHPStan\Rules\UnusedFunctionParametersCheck;
	}


	public function createService088(): PHPStan\Type\FileTypeMapper
	{
		return new PHPStan\Type\FileTypeMapper(
			$this->getService('065'),
			$this->getService('046'),
			$this->getService('017'),
			$this->getService('016'),
			$this->getService('030'),
			$this->getService('07')
		);
	}


	public function createService089(): PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension;
	}


	public function createService090(): PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension;
	}


	public function createService091(): PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension;
	}


	public function createService092(): PHPStan\Type\Php\ArrayFilterFunctionReturnTypeReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFilterFunctionReturnTypeReturnTypeExtension;
	}


	public function createService093(): PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension;
	}


	public function createService094(): PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension;
	}


	public function createService095(): PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension;
	}


	public function createService096(): PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension;
	}


	public function createService097(): PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension;
	}


	public function createService098(): PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension;
	}


	public function createService099(): PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension;
	}


	public function createService0100(): PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension;
	}


	public function createService0101(): PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension;
	}


	public function createService0102(): PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension;
	}


	public function createService0103(): PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension;
	}


	public function createService0104(): PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension;
	}


	public function createService0105(): PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension;
	}


	public function createService0106(): PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension;
	}


	public function createService0107(): PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension;
	}


	public function createService0108(): PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension;
	}


	public function createService0109(): PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension;
	}


	public function createService0110(): PHPStan\Type\Php\CountFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\CountFunctionReturnTypeExtension;
	}


	public function createService0111(): PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension;
	}


	public function createService0112(): PHPStan\Type\Php\CurlInitReturnTypeExtension
	{
		return new PHPStan\Type\Php\CurlInitReturnTypeExtension;
	}


	public function createService0113(): PHPStan\Type\Php\DsMapDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DsMapDynamicReturnTypeExtension;
	}


	public function createService0114(): PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension;
	}


	public function createService0115(): PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension;
	}


	public function createService0116(): PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0117(): PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension;
	}


	public function createService0118(): PHPStan\Type\Php\GetClassDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetClassDynamicReturnTypeExtension;
	}


	public function createService0119(): PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0120(): PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension;
	}


	public function createService0121(): PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension;
	}


	public function createService0122(): PHPStan\Type\Php\StatDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\StatDynamicReturnTypeExtension;
	}


	public function createService0123(): PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension;
	}


	public function createService0124(): PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension($this->getService('084'));
	}


	public function createService0125(): PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension;
	}


	public function createService0126(): PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension;
	}


	public function createService0127(): PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension;
	}


	public function createService0128(): PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension;
	}


	public function createService0129(): PHPStan\Type\Php\VarExportFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\VarExportFunctionDynamicReturnTypeExtension;
	}


	public function createService0130(): PHPStan\Type\Php\MbFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbFunctionsReturnTypeExtension;
	}


	public function createService0131(): PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension;
	}


	public function createService0132(): PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension;
	}


	public function createService0133(): PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension;
	}


	public function createService0134(): PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension;
	}


	public function createService0135(): PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension;
	}


	public function createService0136(): PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension;
	}


	public function createService0137(): PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension;
	}


	public function createService0138(): PHPStan\Type\Php\RangeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\RangeFunctionReturnTypeExtension;
	}


	public function createService0139(): PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension;
	}


	public function createService0140(): PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension;
	}


	public function createService0141(): PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension;
	}


	public function createService0142(): PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension;
	}


	public function createService0143(): PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension;
	}


	public function createService0144(): PHPStan\Type\Php\IsIntFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsIntFunctionTypeSpecifyingExtension;
	}


	public function createService0145(): PHPStan\Type\Php\IsFloatFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsFloatFunctionTypeSpecifyingExtension;
	}


	public function createService0146(): PHPStan\Type\Php\IsNullFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsNullFunctionTypeSpecifyingExtension;
	}


	public function createService0147(): PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension;
	}


	public function createService0148(): PHPStan\Type\Php\IsBoolFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsBoolFunctionTypeSpecifyingExtension;
	}


	public function createService0149(): PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension($this->getService('0123'));
	}


	public function createService0150(): PHPStan\Type\Php\IsCountableFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsCountableFunctionTypeSpecifyingExtension;
	}


	public function createService0151(): PHPStan\Type\Php\IsResourceFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsResourceFunctionTypeSpecifyingExtension;
	}


	public function createService0152(): PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension;
	}


	public function createService0153(): PHPStan\Type\Php\IsStringFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsStringFunctionTypeSpecifyingExtension;
	}


	public function createService0154(): PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension;
	}


	public function createService0155(): PHPStan\Type\Php\IsObjectFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsObjectFunctionTypeSpecifyingExtension;
	}


	public function createService0156(): PHPStan\Type\Php\IsNumericFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsNumericFunctionTypeSpecifyingExtension;
	}


	public function createService0157(): PHPStan\Type\Php\IsScalarFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsScalarFunctionTypeSpecifyingExtension;
	}


	public function createService0158(): PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension;
	}


	public function createService0159(): PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0160(): PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension(true);
	}


	public function createService0161(): PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension;
	}


	public function createService0162(): PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension;
	}


	public function createService0163(): PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension;
	}


	public function createService0164(): PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension;
	}


	public function createService0165(): PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory
	{
		return new PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory(
			$this->getService('phpParserDecorator'),
			$this->getService('0167'),
			$this->getService('0168'),
			$this->getService('059'),
			$this->getService('056'),
			$this->getService('054'),
			$this->getService('053'),
			$this->getService('035'),
			[],
			[],
			[],
			[],
			['/home/umar/sites/fibonacci-flix-test/src', '/home/umar/sites/fibonacci-flix-test/tests'],
			['/home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/..', '/home/umar/sites/fibonacci-flix-test'],
			[],
			$this->parameters['singleReflectionFile'],
			['#^PhpParser\\\#', '#^PHPStan\\\#', '#^Hoa\\\#']
		);
	}


	public function createService0166(): PHPStan\Reflection\BetterReflection\BetterReflectionProviderFactory
	{
		return new class ($this) implements PHPStan\Reflection\BetterReflection\BetterReflectionProviderFactory {
			private $container;


			public function __construct(Container_c2fe5982f5 $container)
			{
				$this->container = $container;
			}


			public function create(
				_HumbugBoxc7aa196c4c1e\Roave\BetterReflection\Reflector\FunctionReflector $functionReflector,
				_HumbugBoxc7aa196c4c1e\Roave\BetterReflection\Reflector\ClassReflector $classReflector,
				_HumbugBoxc7aa196c4c1e\Roave\BetterReflection\Reflector\ConstantReflector $constantReflector
			): PHPStan\Reflection\BetterReflection\BetterReflectionProvider {
				return new PHPStan\Reflection\BetterReflection\BetterReflectionProvider(
					$this->container->getService('065'),
					$this->container->getService('038'),
					$classReflector,
					$this->container->getService('088'),
					$this->container->getService('066'),
					$this->container->getService('stubPhpDocProvider'),
					$this->container->getService('048'),
					$this->container->getService('relativePathHelper'),
					$this->container->getService('07'),
					$this->container->getService('06'),
					$this->container->getService('041'),
					$functionReflector,
					$constantReflector
				);
			}
		};
	}


	public function createService0167(): _HumbugBoxc7aa196c4c1e\Roave\BetterReflection\SourceLocator\SourceStubber\PhpStormStubsSourceStubber
	{
		return new _HumbugBoxc7aa196c4c1e\Roave\BetterReflection\SourceLocator\SourceStubber\PhpStormStubsSourceStubber($this->getService('phpParserDecorator'));
	}


	public function createService0168(): _HumbugBoxc7aa196c4c1e\Roave\BetterReflection\SourceLocator\SourceStubber\ReflectionSourceStubber
	{
		return new _HumbugBoxc7aa196c4c1e\Roave\BetterReflection\SourceLocator\SourceStubber\ReflectionSourceStubber;
	}


	public function createService0169(): PHPStan\Rules\Classes\ExistingClassInInstanceOfRule
	{
		return new PHPStan\Rules\Classes\ExistingClassInInstanceOfRule(
			$this->getService('reflectionProvider'),
			$this->getService('069'),
			true
		);
	}


	public function createService0170(): PHPStan\Rules\Exceptions\CaughtExceptionExistenceRule
	{
		return new PHPStan\Rules\Exceptions\CaughtExceptionExistenceRule(
			$this->getService('reflectionProvider'),
			$this->getService('069'),
			true
		);
	}


	public function createService0171(): PHPStan\Rules\Functions\CallToNonExistentFunctionRule
	{
		return new PHPStan\Rules\Functions\CallToNonExistentFunctionRule($this->getService('reflectionProvider'), false);
	}


	public function createService0172(): PHPStan\Rules\Functions\ClosureUsesThisRule
	{
		return new PHPStan\Rules\Functions\ClosureUsesThisRule;
	}


	public function createService0173(): PHPStan\Rules\Methods\CallMethodsRule
	{
		return new PHPStan\Rules\Methods\CallMethodsRule(
			$this->getService('reflectionProvider'),
			$this->getService('072'),
			$this->getService('086'),
			false,
			true
		);
	}


	public function createService0174(): PHPStan\Rules\Methods\CallStaticMethodsRule
	{
		return new PHPStan\Rules\Methods\CallStaticMethodsRule(
			$this->getService('reflectionProvider'),
			$this->getService('072'),
			$this->getService('086'),
			$this->getService('069'),
			false,
			true
		);
	}


	public function createService0175(): PHPStan\Rules\Methods\OverridingMethodRule
	{
		return new PHPStan\Rules\Methods\OverridingMethodRule($this->getService('08'), $this->getService('080'), true);
	}


	public function createService0176(): PHPStan\Rules\Missing\MissingClosureNativeReturnTypehintRule
	{
		return new PHPStan\Rules\Missing\MissingClosureNativeReturnTypehintRule(false);
	}


	public function createService0177(): PHPStan\Rules\Missing\MissingReturnRule
	{
		return new PHPStan\Rules\Missing\MissingReturnRule(false, true);
	}


	public function createService0178(): PHPStan\Rules\Namespaces\ExistingNamesInGroupUseRule
	{
		return new PHPStan\Rules\Namespaces\ExistingNamesInGroupUseRule(
			$this->getService('reflectionProvider'),
			$this->getService('069'),
			false
		);
	}


	public function createService0179(): PHPStan\Rules\Namespaces\ExistingNamesInUseRule
	{
		return new PHPStan\Rules\Namespaces\ExistingNamesInUseRule(
			$this->getService('reflectionProvider'),
			$this->getService('069'),
			false
		);
	}


	public function createService0180(): PHPStan\Rules\Operators\InvalidIncDecOperationRule
	{
		return new PHPStan\Rules\Operators\InvalidIncDecOperationRule(false);
	}


	public function createService0181(): PHPStan\Rules\Properties\AccessPropertiesRule
	{
		return new PHPStan\Rules\Properties\AccessPropertiesRule(
			$this->getService('reflectionProvider'),
			$this->getService('086'),
			true
		);
	}


	public function createService0182(): PHPStan\Rules\Properties\AccessStaticPropertiesRule
	{
		return new PHPStan\Rules\Properties\AccessStaticPropertiesRule(
			$this->getService('reflectionProvider'),
			$this->getService('086'),
			$this->getService('069')
		);
	}


	public function createService0183(): PHPStan\Rules\Properties\ExistingClassesInPropertiesRule
	{
		return new PHPStan\Rules\Properties\ExistingClassesInPropertiesRule(
			$this->getService('reflectionProvider'),
			$this->getService('069'),
			true,
			false
		);
	}


	public function createService0184(): PHPStan\Rules\Properties\UninitializedPropertyRule
	{
		return new PHPStan\Rules\Properties\UninitializedPropertyRule($this->getService('082'), []);
	}


	public function createService0185(): PHPStan\Rules\Properties\WritingToReadOnlyPropertiesRule
	{
		return new PHPStan\Rules\Properties\WritingToReadOnlyPropertiesRule(
			$this->getService('086'),
			$this->getService('083'),
			$this->getService('084'),
			false
		);
	}


	public function createService0186(): PHPStan\Rules\Properties\ReadingWriteOnlyPropertiesRule
	{
		return new PHPStan\Rules\Properties\ReadingWriteOnlyPropertiesRule(
			$this->getService('083'),
			$this->getService('084'),
			$this->getService('086'),
			false
		);
	}


	public function createService0187(): PHPStan\Rules\Variables\CompactVariablesRule
	{
		return new PHPStan\Rules\Variables\CompactVariablesRule(true);
	}


	public function createService0188(): PHPStan\Rules\Variables\DefinedVariableRule
	{
		return new PHPStan\Rules\Variables\DefinedVariableRule(true, true);
	}


	public function createService0189(): PHPStan\Rules\Variables\DefinedVariableInAnonymousFunctionUseRule
	{
		return new PHPStan\Rules\Variables\DefinedVariableInAnonymousFunctionUseRule(true);
	}


	public function createService0190(): PHPStan\Rules\Regexp\RegularExpressionPatternRule
	{
		return new PHPStan\Rules\Regexp\RegularExpressionPatternRule;
	}


	public function createService0191(): PHPStan\Rules\Whitespace\FileWhitespaceRule
	{
		return new PHPStan\Rules\Whitespace\FileWhitespaceRule;
	}


	public function createService0192(): PHPStan\Rules\Variables\VariableCertaintyNullCoalesceRule
	{
		return new PHPStan\Rules\Variables\VariableCertaintyNullCoalesceRule;
	}


	public function createService0193(): PHPStan\Rules\Classes\MixinRule
	{
		return new PHPStan\Rules\Classes\MixinRule(
			$this->getService('088'),
			$this->getService('reflectionProvider'),
			$this->getService('069'),
			$this->getService('076'),
			$this->getService('081'),
			true
		);
	}


	public function createService0194(): PHPStan\Rules\Functions\CallCallablesRule
	{
		return new PHPStan\Rules\Functions\CallCallablesRule($this->getService('072'), $this->getService('086'), true);
	}


	public function createService0195(): PHPStan\Rules\PhpDoc\InvalidPhpDocVarTagTypeRule
	{
		return new PHPStan\Rules\PhpDoc\InvalidPhpDocVarTagTypeRule(
			$this->getService('088'),
			$this->getService('reflectionProvider'),
			$this->getService('069'),
			$this->getService('076'),
			$this->getService('081'),
			true,
			true
		);
	}


	public function createService0196(): PHPStan\Rules\Arrays\AppendedArrayKeyTypeRule
	{
		return new PHPStan\Rules\Arrays\AppendedArrayKeyTypeRule($this->getService('084'), true);
	}


	public function createService0197(): PHPStan\Rules\Arrays\InvalidKeyInArrayDimFetchRule
	{
		return new PHPStan\Rules\Arrays\InvalidKeyInArrayDimFetchRule(true);
	}


	public function createService0198(): PHPStan\Rules\Arrays\InvalidKeyInArrayItemRule
	{
		return new PHPStan\Rules\Arrays\InvalidKeyInArrayItemRule(true);
	}


	public function createService0199(): PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchRule
	{
		return new PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchRule($this->getService('086'), true);
	}


	public function createService0200(): PHPStan\Rules\Functions\ReturnTypeRule
	{
		return new PHPStan\Rules\Functions\ReturnTypeRule(
			$this->getService('074'),
			$this->getService('betterReflectionFunctionReflector')
		);
	}


	public function createService0201(): PHPStan\Rules\Generators\YieldFromTypeRule
	{
		return new PHPStan\Rules\Generators\YieldFromTypeRule($this->getService('086'), true);
	}


	public function createService0202(): PHPStan\Rules\Generators\YieldInGeneratorRule
	{
		return new PHPStan\Rules\Generators\YieldInGeneratorRule(true);
	}


	public function createService0203(): PHPStan\Rules\Classes\ImpossibleInstanceOfRule
	{
		return new PHPStan\Rules\Classes\ImpossibleInstanceOfRule(false, true);
	}


	public function createService0204(): PHPStan\Rules\Comparison\BooleanAndConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\BooleanAndConstantConditionRule($this->getService('070'), true);
	}


	public function createService0205(): PHPStan\Rules\Comparison\BooleanOrConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\BooleanOrConstantConditionRule($this->getService('070'), true);
	}


	public function createService0206(): PHPStan\Rules\Comparison\BooleanNotConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\BooleanNotConstantConditionRule($this->getService('070'), true);
	}


	public function createService0207(): PHPStan\Rules\DeadCode\UnusedPrivateConstantRule
	{
		return new PHPStan\Rules\DeadCode\UnusedPrivateConstantRule;
	}


	public function createService0208(): PHPStan\Rules\DeadCode\UnusedPrivateMethodRule
	{
		return new PHPStan\Rules\DeadCode\UnusedPrivateMethodRule;
	}


	public function createService0209(): PHPStan\Rules\DeadCode\UnusedPrivatePropertyRule
	{
		return new PHPStan\Rules\DeadCode\UnusedPrivatePropertyRule($this->getService('082'), [], [], false);
	}


	public function createService0210(): PHPStan\Rules\Comparison\ElseIfConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\ElseIfConstantConditionRule($this->getService('070'), true);
	}


	public function createService0211(): PHPStan\Rules\Comparison\IfConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\IfConstantConditionRule($this->getService('070'), true);
	}


	public function createService0212(): PHPStan\Rules\Comparison\ImpossibleCheckTypeFunctionCallRule
	{
		return new PHPStan\Rules\Comparison\ImpossibleCheckTypeFunctionCallRule($this->getService('071'), false, true);
	}


	public function createService0213(): PHPStan\Rules\Comparison\ImpossibleCheckTypeMethodCallRule
	{
		return new PHPStan\Rules\Comparison\ImpossibleCheckTypeMethodCallRule($this->getService('071'), false, true);
	}


	public function createService0214(): PHPStan\Rules\Comparison\ImpossibleCheckTypeStaticMethodCallRule
	{
		return new PHPStan\Rules\Comparison\ImpossibleCheckTypeStaticMethodCallRule($this->getService('071'), false, true);
	}


	public function createService0215(): PHPStan\Rules\Comparison\StrictComparisonOfDifferentTypesRule
	{
		return new PHPStan\Rules\Comparison\StrictComparisonOfDifferentTypesRule(false);
	}


	public function createService0216(): PHPStan\Rules\Comparison\TernaryOperatorConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\TernaryOperatorConstantConditionRule($this->getService('070'), true);
	}


	public function createService0217(): PHPStan\Rules\Comparison\UnreachableIfBranchesRule
	{
		return new PHPStan\Rules\Comparison\UnreachableIfBranchesRule($this->getService('070'), true);
	}


	public function createService0218(): PHPStan\Rules\Comparison\UnreachableTernaryElseBranchRule
	{
		return new PHPStan\Rules\Comparison\UnreachableTernaryElseBranchRule($this->getService('070'), true);
	}


	public function createService0219(): PHPStan\Rules\TooWideTypehints\TooWideMethodReturnTypehintRule
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideMethodReturnTypehintRule(false);
	}


	public function createService0220(): PHPStan\Rules\Variables\IssetRule
	{
		return new PHPStan\Rules\Variables\IssetRule($this->getService('079'));
	}


	public function createService0221(): PHPStan\Rules\Variables\NullCoalesceRule
	{
		return new PHPStan\Rules\Variables\NullCoalesceRule($this->getService('079'));
	}


	public function createService0222(): PHPStan\Rules\Functions\RandomIntParametersRule
	{
		return new PHPStan\Rules\Functions\RandomIntParametersRule($this->getService('reflectionProvider'), true);
	}


	public function createService0223(): PHPStan\PhpDoc\StubSourceLocatorFactory
	{
		return new PHPStan\PhpDoc\StubSourceLocatorFactory(
			$this->getService('phpParserDecorator'),
			$this->getService('0167'),
			$this->getService('059'),
			$this->getService('035'),
			[
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/ReflectionClass.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/iterable.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/ArrayObject.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/WeakReference.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/ext-ds.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/PDOStatement.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/ReflectionFunctionAbstract.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/date.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/zip.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/dom.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/spl.stub',
			]
		);
	}


	public function createServiceBetterReflectionClassReflector(): PHPStan\Reflection\BetterReflection\Reflector\MemoizingClassReflector
	{
		return new PHPStan\Reflection\BetterReflection\Reflector\MemoizingClassReflector($this->getService('betterReflectionSourceLocator'));
	}


	public function createServiceBetterReflectionConstantReflector(): PHPStan\Reflection\BetterReflection\Reflector\MemoizingConstantReflector
	{
		return new PHPStan\Reflection\BetterReflection\Reflector\MemoizingConstantReflector(
			$this->getService('betterReflectionSourceLocator'),
			$this->getService('betterReflectionClassReflector')
		);
	}


	public function createServiceBetterReflectionFunctionReflector(): PHPStan\Reflection\BetterReflection\Reflector\MemoizingFunctionReflector
	{
		return new PHPStan\Reflection\BetterReflection\Reflector\MemoizingFunctionReflector(
			$this->getService('betterReflectionSourceLocator'),
			$this->getService('betterReflectionClassReflector')
		);
	}


	public function createServiceBetterReflectionProvider(): PHPStan\Reflection\BetterReflection\BetterReflectionProvider
	{
		return new PHPStan\Reflection\BetterReflection\BetterReflectionProvider(
			$this->getService('065'),
			$this->getService('038'),
			$this->getService('betterReflectionClassReflector'),
			$this->getService('088'),
			$this->getService('066'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('048'),
			$this->getService('relativePathHelper'),
			$this->getService('07'),
			$this->getService('06'),
			$this->getService('041'),
			$this->getService('betterReflectionFunctionReflector'),
			$this->getService('betterReflectionConstantReflector')
		);
	}


	public function createServiceBetterReflectionSourceLocator(): _HumbugBoxc7aa196c4c1e\Roave\BetterReflection\SourceLocator\Type\SourceLocator
	{
		return $this->getService('0165')->create();
	}


	public function createServiceBroker(): PHPStan\Broker\Broker
	{
		return $this->getService('brokerFactory')->create();
	}


	public function createServiceBrokerFactory(): PHPStan\Broker\BrokerFactory
	{
		return new PHPStan\Broker\BrokerFactory($this->getService('035'));
	}


	public function createServiceCacheStorage(): PHPStan\Cache\FileCacheStorage
	{
		return new PHPStan\Cache\FileCacheStorage('/home/umar/sites/fibonacci-flix-test/var/cache/ecs/cache/PHPStan');
	}


	public function createServiceContainer(): Container_c2fe5982f5
	{
		return $this;
	}


	public function createServiceDirectParser(): PHPStan\Parser\DirectParser
	{
		return new PHPStan\Parser\DirectParser($this->getService('05'), $this->getService('03'));
	}


	public function createServiceErrorFormatter__baselineNeon(): PHPStan\Command\ErrorFormatter\BaselineNeonErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\BaselineNeonErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__checkstyle(): PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__github(): PHPStan\Command\ErrorFormatter\GithubErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\GithubErrorFormatter(
			$this->getService('simpleRelativePathHelper'),
			$this->getService('errorFormatter.table')
		);
	}


	public function createServiceErrorFormatter__gitlab(): PHPStan\Command\ErrorFormatter\GitlabErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\GitlabErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__json(): PHPStan\Command\ErrorFormatter\JsonErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\JsonErrorFormatter(false);
	}


	public function createServiceErrorFormatter__junit(): PHPStan\Command\ErrorFormatter\JunitErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\JunitErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__prettyJson(): PHPStan\Command\ErrorFormatter\JsonErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\JsonErrorFormatter(true);
	}


	public function createServiceErrorFormatter__raw(): PHPStan\Command\ErrorFormatter\RawErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\RawErrorFormatter;
	}


	public function createServiceErrorFormatter__table(): PHPStan\Command\ErrorFormatter\TableErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\TableErrorFormatter($this->getService('relativePathHelper'), true);
	}


	public function createServiceInnerRuntimeReflectionProvider(): PHPStan\Reflection\Runtime\RuntimeReflectionProvider
	{
		return new PHPStan\Reflection\Runtime\RuntimeReflectionProvider(
			$this->getService('065'),
			$this->getService('038'),
			$this->getService('048'),
			$this->getService('088'),
			$this->getService('066'),
			$this->getService('06'),
			$this->getService('07'),
			$this->getService('041'),
			$this->getService('relativePathHelper'),
			$this->getService('stubPhpDocProvider')
		);
	}


	public function createServiceNodeScopeResolverClassReflector(): _HumbugBoxc7aa196c4c1e\Roave\BetterReflection\Reflector\ClassReflector
	{
		return $this->getService('stubClassReflector');
	}


	public function createServicePhpParserDecorator(): PHPStan\Parser\PhpParserDecorator
	{
		return new PHPStan\Parser\PhpParserDecorator($this->getService('046'));
	}


	public function createServicePhpParserLexer(): PhpParser\Lexer
	{
		return $this->getService('02')->create();
	}


	public function createServiceReflectionProvider(): PHPStan\Reflection\BetterReflection\BetterReflectionProvider
	{
		return $this->getService('stubBetterReflectionProvider');
	}


	public function createServiceReflectionProviderFactory(): PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory
	{
		return new PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory(
			$this->getService('runtimeReflectionProvider'),
			$this->getService('betterReflectionProvider'),
			false
		);
	}


	public function createServiceRegexGrammarStream(): Hoa\File\Read
	{
		return new Hoa\File\Read('hoa://Library/Regex/Grammar.pp');
	}


	public function createServiceRegexParser(): Hoa\Compiler\Llk\Parser
	{
		return Hoa\Compiler\Llk\Llk::load($this->getService('regexGrammarStream'));
	}


	public function createServiceRegistry(): PHPStan\Rules\Registry
	{
		return $this->getService('085')->create();
	}


	public function createServiceRelativePathHelper(): PHPStan\File\RelativePathHelper
	{
		return new PHPStan\File\FuzzyRelativePathHelper(
			'/home/umar/sites/fibonacci-flix-test',
			['/home/umar/sites/fibonacci-flix-test/src', '/home/umar/sites/fibonacci-flix-test/tests']
		);
	}


	public function createServiceRules__0(): PHPStan\Rules\Arrays\DuplicateKeysInLiteralArraysRule
	{
		return new PHPStan\Rules\Arrays\DuplicateKeysInLiteralArraysRule($this->getService('06'));
	}


	public function createServiceRules__1(): PHPStan\Rules\Arrays\OffsetAccessWithoutDimForReadingRule
	{
		return new PHPStan\Rules\Arrays\OffsetAccessWithoutDimForReadingRule;
	}


	public function createServiceRules__10(): PHPStan\Rules\Classes\NewStaticRule
	{
		return new PHPStan\Rules\Classes\NewStaticRule;
	}


	public function createServiceRules__11(): PHPStan\Rules\Functions\CallToFunctionParametersRule
	{
		return new PHPStan\Rules\Functions\CallToFunctionParametersRule(
			$this->getService('reflectionProvider'),
			$this->getService('072')
		);
	}


	public function createServiceRules__12(): PHPStan\Rules\Functions\ExistingClassesInArrowFunctionTypehintsRule
	{
		return new PHPStan\Rules\Functions\ExistingClassesInArrowFunctionTypehintsRule($this->getService('073'));
	}


	public function createServiceRules__13(): PHPStan\Rules\Functions\ExistingClassesInClosureTypehintsRule
	{
		return new PHPStan\Rules\Functions\ExistingClassesInClosureTypehintsRule($this->getService('073'));
	}


	public function createServiceRules__14(): PHPStan\Rules\Functions\ExistingClassesInTypehintsRule
	{
		return new PHPStan\Rules\Functions\ExistingClassesInTypehintsRule($this->getService('073'));
	}


	public function createServiceRules__15(): PHPStan\Rules\Functions\InnerFunctionRule
	{
		return new PHPStan\Rules\Functions\InnerFunctionRule;
	}


	public function createServiceRules__16(): PHPStan\Rules\Functions\PrintfParametersRule
	{
		return new PHPStan\Rules\Functions\PrintfParametersRule;
	}


	public function createServiceRules__17(): PHPStan\Rules\Methods\AbstractMethodInNonAbstractClassRule
	{
		return new PHPStan\Rules\Methods\AbstractMethodInNonAbstractClassRule;
	}


	public function createServiceRules__18(): PHPStan\Rules\Methods\ExistingClassesInTypehintsRule
	{
		return new PHPStan\Rules\Methods\ExistingClassesInTypehintsRule($this->getService('073'));
	}


	public function createServiceRules__19(): PHPStan\Rules\Methods\MissingMethodImplementationRule
	{
		return new PHPStan\Rules\Methods\MissingMethodImplementationRule;
	}


	public function createServiceRules__2(): PHPStan\Rules\Classes\ClassConstantDeclarationRule
	{
		return new PHPStan\Rules\Classes\ClassConstantDeclarationRule;
	}


	public function createServiceRules__20(): PHPStan\Rules\Properties\AccessPropertiesInAssignRule
	{
		return new PHPStan\Rules\Properties\AccessPropertiesInAssignRule($this->getService('0181'));
	}


	public function createServiceRules__21(): PHPStan\Rules\Properties\AccessStaticPropertiesInAssignRule
	{
		return new PHPStan\Rules\Properties\AccessStaticPropertiesInAssignRule($this->getService('0182'));
	}


	public function createServiceRules__22(): PHPStan\Rules\Variables\UnsetRule
	{
		return new PHPStan\Rules\Variables\UnsetRule;
	}


	public function createServiceRules__23(): PHPStan\Rules\Classes\UnusedConstructorParametersRule
	{
		return new PHPStan\Rules\Classes\UnusedConstructorParametersRule($this->getService('087'));
	}


	public function createServiceRules__24(): PHPStan\Rules\Constants\ConstantRule
	{
		return new PHPStan\Rules\Constants\ConstantRule;
	}


	public function createServiceRules__25(): PHPStan\Rules\Functions\UnusedClosureUsesRule
	{
		return new PHPStan\Rules\Functions\UnusedClosureUsesRule($this->getService('087'));
	}


	public function createServiceRules__26(): PHPStan\Rules\Variables\VariableCertaintyInIssetRule
	{
		return new PHPStan\Rules\Variables\VariableCertaintyInIssetRule;
	}


	public function createServiceRules__27(): PHPStan\Rules\Cast\EchoRule
	{
		return new PHPStan\Rules\Cast\EchoRule($this->getService('086'));
	}


	public function createServiceRules__28(): PHPStan\Rules\Cast\InvalidCastRule
	{
		return new PHPStan\Rules\Cast\InvalidCastRule($this->getService('reflectionProvider'), $this->getService('086'));
	}


	public function createServiceRules__29(): PHPStan\Rules\Cast\InvalidPartOfEncapsedStringRule
	{
		return new PHPStan\Rules\Cast\InvalidPartOfEncapsedStringRule($this->getService('06'), $this->getService('086'));
	}


	public function createServiceRules__3(): PHPStan\Rules\Classes\ClassConstantRule
	{
		return new PHPStan\Rules\Classes\ClassConstantRule(
			$this->getService('reflectionProvider'),
			$this->getService('086'),
			$this->getService('069')
		);
	}


	public function createServiceRules__30(): PHPStan\Rules\Cast\PrintRule
	{
		return new PHPStan\Rules\Cast\PrintRule($this->getService('086'));
	}


	public function createServiceRules__31(): PHPStan\Rules\Functions\IncompatibleDefaultParameterTypeRule
	{
		return new PHPStan\Rules\Functions\IncompatibleDefaultParameterTypeRule;
	}


	public function createServiceRules__32(): PHPStan\Rules\Generics\ClassAncestorsRule
	{
		return new PHPStan\Rules\Generics\ClassAncestorsRule($this->getService('088'), $this->getService('075'));
	}


	public function createServiceRules__33(): PHPStan\Rules\Generics\ClassTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\ClassTemplateTypeRule($this->getService('077'));
	}


	public function createServiceRules__34(): PHPStan\Rules\Generics\FunctionTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\FunctionTemplateTypeRule($this->getService('088'), $this->getService('077'));
	}


	public function createServiceRules__35(): PHPStan\Rules\Generics\FunctionSignatureVarianceRule
	{
		return new PHPStan\Rules\Generics\FunctionSignatureVarianceRule($this->getService('078'));
	}


	public function createServiceRules__36(): PHPStan\Rules\Generics\InterfaceAncestorsRule
	{
		return new PHPStan\Rules\Generics\InterfaceAncestorsRule($this->getService('088'), $this->getService('075'));
	}


	public function createServiceRules__37(): PHPStan\Rules\Generics\InterfaceTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\InterfaceTemplateTypeRule($this->getService('088'), $this->getService('077'));
	}


	public function createServiceRules__38(): PHPStan\Rules\Generics\MethodTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\MethodTemplateTypeRule($this->getService('088'), $this->getService('077'));
	}


	public function createServiceRules__39(): PHPStan\Rules\Generics\MethodSignatureVarianceRule
	{
		return new PHPStan\Rules\Generics\MethodSignatureVarianceRule($this->getService('078'));
	}


	public function createServiceRules__4(): PHPStan\Rules\Classes\DuplicateDeclarationRule
	{
		return new PHPStan\Rules\Classes\DuplicateDeclarationRule;
	}


	public function createServiceRules__40(): PHPStan\Rules\Generics\TraitTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\TraitTemplateTypeRule($this->getService('088'), $this->getService('077'));
	}


	public function createServiceRules__41(): PHPStan\Rules\Methods\IncompatibleDefaultParameterTypeRule
	{
		return new PHPStan\Rules\Methods\IncompatibleDefaultParameterTypeRule;
	}


	public function createServiceRules__42(): PHPStan\Rules\Operators\InvalidBinaryOperationRule
	{
		return new PHPStan\Rules\Operators\InvalidBinaryOperationRule($this->getService('06'), $this->getService('086'));
	}


	public function createServiceRules__43(): PHPStan\Rules\Operators\InvalidUnaryOperationRule
	{
		return new PHPStan\Rules\Operators\InvalidUnaryOperationRule;
	}


	public function createServiceRules__44(): PHPStan\Rules\Operators\InvalidComparisonOperationRule
	{
		return new PHPStan\Rules\Operators\InvalidComparisonOperationRule($this->getService('086'));
	}


	public function createServiceRules__45(): PHPStan\Rules\PhpDoc\IncompatiblePhpDocTypeRule
	{
		return new PHPStan\Rules\PhpDoc\IncompatiblePhpDocTypeRule($this->getService('088'), $this->getService('076'));
	}


	public function createServiceRules__46(): PHPStan\Rules\PhpDoc\IncompatiblePropertyPhpDocTypeRule
	{
		return new PHPStan\Rules\PhpDoc\IncompatiblePropertyPhpDocTypeRule($this->getService('076'));
	}


	public function createServiceRules__47(): PHPStan\Rules\PhpDoc\InvalidPhpDocTagValueRule
	{
		return new PHPStan\Rules\PhpDoc\InvalidPhpDocTagValueRule($this->getService('011'), $this->getService('014'));
	}


	public function createServiceRules__48(): PHPStan\Rules\PhpDoc\InvalidPHPStanDocTagRule
	{
		return new PHPStan\Rules\PhpDoc\InvalidPHPStanDocTagRule($this->getService('011'), $this->getService('014'));
	}


	public function createServiceRules__49(): PHPStan\Rules\PhpDoc\InvalidThrowsPhpDocValueRule
	{
		return new PHPStan\Rules\PhpDoc\InvalidThrowsPhpDocValueRule($this->getService('088'));
	}


	public function createServiceRules__5(): PHPStan\Rules\Classes\ExistingClassesInClassImplementsRule
	{
		return new PHPStan\Rules\Classes\ExistingClassesInClassImplementsRule(
			$this->getService('069'),
			$this->getService('reflectionProvider')
		);
	}


	public function createServiceRules__50(): PHPStan\Rules\PhpDoc\WrongVariableNameInVarTagRule
	{
		return new PHPStan\Rules\PhpDoc\WrongVariableNameInVarTagRule($this->getService('088'));
	}


	public function createServiceRules__51(): PHPStan\Rules\Arrays\AppendedArrayItemTypeRule
	{
		return new PHPStan\Rules\Arrays\AppendedArrayItemTypeRule($this->getService('084'), $this->getService('086'));
	}


	public function createServiceRules__52(): PHPStan\Rules\Arrays\IterableInForeachRule
	{
		return new PHPStan\Rules\Arrays\IterableInForeachRule($this->getService('086'));
	}


	public function createServiceRules__53(): PHPStan\Rules\Arrays\OffsetAccessAssignmentRule
	{
		return new PHPStan\Rules\Arrays\OffsetAccessAssignmentRule($this->getService('086'));
	}


	public function createServiceRules__54(): PHPStan\Rules\Arrays\OffsetAccessAssignOpRule
	{
		return new PHPStan\Rules\Arrays\OffsetAccessAssignOpRule($this->getService('086'));
	}


	public function createServiceRules__55(): PHPStan\Rules\Arrays\OffsetAccessValueAssignmentRule
	{
		return new PHPStan\Rules\Arrays\OffsetAccessValueAssignmentRule($this->getService('086'));
	}


	public function createServiceRules__56(): PHPStan\Rules\Arrays\UnpackIterableInArrayRule
	{
		return new PHPStan\Rules\Arrays\UnpackIterableInArrayRule($this->getService('086'));
	}


	public function createServiceRules__57(): PHPStan\Rules\Functions\ArrowFunctionReturnTypeRule
	{
		return new PHPStan\Rules\Functions\ArrowFunctionReturnTypeRule($this->getService('074'));
	}


	public function createServiceRules__58(): PHPStan\Rules\Functions\ClosureReturnTypeRule
	{
		return new PHPStan\Rules\Functions\ClosureReturnTypeRule($this->getService('074'));
	}


	public function createServiceRules__59(): PHPStan\Rules\Generators\YieldTypeRule
	{
		return new PHPStan\Rules\Generators\YieldTypeRule($this->getService('086'));
	}


	public function createServiceRules__6(): PHPStan\Rules\Classes\ExistingClassesInInterfaceExtendsRule
	{
		return new PHPStan\Rules\Classes\ExistingClassesInInterfaceExtendsRule(
			$this->getService('069'),
			$this->getService('reflectionProvider')
		);
	}


	public function createServiceRules__60(): PHPStan\Rules\Methods\ReturnTypeRule
	{
		return new PHPStan\Rules\Methods\ReturnTypeRule($this->getService('074'));
	}


	public function createServiceRules__61(): PHPStan\Rules\Properties\DefaultValueTypesAssignedToPropertiesRule
	{
		return new PHPStan\Rules\Properties\DefaultValueTypesAssignedToPropertiesRule($this->getService('086'));
	}


	public function createServiceRules__62(): PHPStan\Rules\Properties\TypesAssignedToPropertiesRule
	{
		return new PHPStan\Rules\Properties\TypesAssignedToPropertiesRule(
			$this->getService('086'),
			$this->getService('083'),
			$this->getService('084')
		);
	}


	public function createServiceRules__63(): PHPStan\Rules\Variables\ThrowTypeRule
	{
		return new PHPStan\Rules\Variables\ThrowTypeRule($this->getService('086'));
	}


	public function createServiceRules__64(): PHPStan\Rules\Variables\VariableCloningRule
	{
		return new PHPStan\Rules\Variables\VariableCloningRule($this->getService('086'));
	}


	public function createServiceRules__65(): PHPStan\Rules\Arrays\DeadForeachRule
	{
		return new PHPStan\Rules\Arrays\DeadForeachRule;
	}


	public function createServiceRules__66(): PHPStan\Rules\Comparison\NumberComparisonOperatorsConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\NumberComparisonOperatorsConstantConditionRule;
	}


	public function createServiceRules__67(): PHPStan\Rules\DeadCode\NoopRule
	{
		return new PHPStan\Rules\DeadCode\NoopRule($this->getService('06'));
	}


	public function createServiceRules__68(): PHPStan\Rules\DeadCode\UnreachableStatementRule
	{
		return new PHPStan\Rules\DeadCode\UnreachableStatementRule;
	}


	public function createServiceRules__69(): PHPStan\Rules\Exceptions\DeadCatchRule
	{
		return new PHPStan\Rules\Exceptions\DeadCatchRule;
	}


	public function createServiceRules__7(): PHPStan\Rules\Classes\ExistingClassInClassExtendsRule
	{
		return new PHPStan\Rules\Classes\ExistingClassInClassExtendsRule(
			$this->getService('069'),
			$this->getService('reflectionProvider')
		);
	}


	public function createServiceRules__70(): PHPStan\Rules\Functions\CallToFunctionStamentWithoutSideEffectsRule
	{
		return new PHPStan\Rules\Functions\CallToFunctionStamentWithoutSideEffectsRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__71(): PHPStan\Rules\Methods\CallToMethodStamentWithoutSideEffectsRule
	{
		return new PHPStan\Rules\Methods\CallToMethodStamentWithoutSideEffectsRule($this->getService('086'));
	}


	public function createServiceRules__72(): PHPStan\Rules\Methods\CallToStaticMethodStamentWithoutSideEffectsRule
	{
		return new PHPStan\Rules\Methods\CallToStaticMethodStamentWithoutSideEffectsRule(
			$this->getService('086'),
			$this->getService('reflectionProvider')
		);
	}


	public function createServiceRules__73(): PHPStan\Rules\TooWideTypehints\TooWideArrowFunctionReturnTypehintRule
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideArrowFunctionReturnTypehintRule;
	}


	public function createServiceRules__74(): PHPStan\Rules\TooWideTypehints\TooWideClosureReturnTypehintRule
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideClosureReturnTypehintRule;
	}


	public function createServiceRules__75(): PHPStan\Rules\TooWideTypehints\TooWideFunctionReturnTypehintRule
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideFunctionReturnTypehintRule;
	}


	public function createServiceRules__76(): PHPStan\Rules\Functions\MissingFunctionParameterTypehintRule
	{
		return new PHPStan\Rules\Functions\MissingFunctionParameterTypehintRule($this->getService('081'));
	}


	public function createServiceRules__77(): PHPStan\Rules\Functions\MissingFunctionReturnTypehintRule
	{
		return new PHPStan\Rules\Functions\MissingFunctionReturnTypehintRule($this->getService('081'));
	}


	public function createServiceRules__78(): PHPStan\Rules\Methods\MissingMethodParameterTypehintRule
	{
		return new PHPStan\Rules\Methods\MissingMethodParameterTypehintRule($this->getService('081'));
	}


	public function createServiceRules__79(): PHPStan\Rules\Methods\MissingMethodReturnTypehintRule
	{
		return new PHPStan\Rules\Methods\MissingMethodReturnTypehintRule($this->getService('081'));
	}


	public function createServiceRules__8(): PHPStan\Rules\Classes\ExistingClassInTraitUseRule
	{
		return new PHPStan\Rules\Classes\ExistingClassInTraitUseRule($this->getService('069'), $this->getService('reflectionProvider'));
	}


	public function createServiceRules__80(): PHPStan\Rules\Properties\MissingPropertyTypehintRule
	{
		return new PHPStan\Rules\Properties\MissingPropertyTypehintRule($this->getService('081'));
	}


	public function createServiceRules__9(): PHPStan\Rules\Classes\InstantiationRule
	{
		return new PHPStan\Rules\Classes\InstantiationRule(
			$this->getService('reflectionProvider'),
			$this->getService('072'),
			$this->getService('069')
		);
	}


	public function createServiceRuntimeReflectionProvider(): PHPStan\Reflection\ReflectionProvider\ClassBlacklistReflectionProvider
	{
		return new PHPStan\Reflection\ReflectionProvider\ClassBlacklistReflectionProvider(
			$this->getService('innerRuntimeReflectionProvider'),
			$this->getService('0167'),
			['#^PhpParser\\\#', '#^PHPStan\\\#', '#^Hoa\\\#'],
			null
		);
	}


	public function createServiceSimpleRelativePathHelper(): PHPStan\File\RelativePathHelper
	{
		return new PHPStan\File\SimpleRelativePathHelper('/home/umar/sites/fibonacci-flix-test');
	}


	public function createServiceStubBetterReflectionProvider(): PHPStan\Reflection\BetterReflection\BetterReflectionProvider
	{
		return new PHPStan\Reflection\BetterReflection\BetterReflectionProvider(
			$this->getService('065'),
			$this->getService('038'),
			$this->getService('stubClassReflector'),
			$this->getService('088'),
			$this->getService('066'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('048'),
			$this->getService('relativePathHelper'),
			$this->getService('07'),
			$this->getService('06'),
			$this->getService('041'),
			$this->getService('stubFunctionReflector'),
			$this->getService('stubConstantReflector')
		);
	}


	public function createServiceStubClassReflector(): _HumbugBoxc7aa196c4c1e\Roave\BetterReflection\Reflector\ClassReflector
	{
		return new _HumbugBoxc7aa196c4c1e\Roave\BetterReflection\Reflector\ClassReflector($this->getService('stubSourceLocator'));
	}


	public function createServiceStubConstantReflector(): _HumbugBoxc7aa196c4c1e\Roave\BetterReflection\Reflector\ConstantReflector
	{
		return new _HumbugBoxc7aa196c4c1e\Roave\BetterReflection\Reflector\ConstantReflector(
			$this->getService('stubSourceLocator'),
			$this->getService('stubClassReflector')
		);
	}


	public function createServiceStubFunctionReflector(): _HumbugBoxc7aa196c4c1e\Roave\BetterReflection\Reflector\FunctionReflector
	{
		return new _HumbugBoxc7aa196c4c1e\Roave\BetterReflection\Reflector\FunctionReflector(
			$this->getService('stubSourceLocator'),
			$this->getService('stubClassReflector')
		);
	}


	public function createServiceStubPhpDocProvider(): PHPStan\PhpDoc\StubPhpDocProvider
	{
		return new PHPStan\PhpDoc\StubPhpDocProvider(
			$this->getService('046'),
			$this->getService('088'),
			[
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/ReflectionClass.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/iterable.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/ArrayObject.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/WeakReference.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/ext-ds.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/PDOStatement.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/ReflectionFunctionAbstract.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/date.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/zip.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/dom.stub',
				'phar:///home/umar/sites/fibonacci-flix-test/vendor/phpstan/phpstan/phpstan/stubs/spl.stub',
			]
		);
	}


	public function createServiceStubSourceLocator(): _HumbugBoxc7aa196c4c1e\Roave\BetterReflection\SourceLocator\Type\SourceLocator
	{
		return $this->getService('0223')->create();
	}


	public function createServiceTypeSpecifier(): PHPStan\Analyser\TypeSpecifier
	{
		return $this->getService('typeSpecifierFactory')->create();
	}


	public function createServiceTypeSpecifierFactory(): PHPStan\Analyser\TypeSpecifierFactory
	{
		return new PHPStan\Analyser\TypeSpecifierFactory($this->getService('035'));
	}


	public function initialize()
	{
	}
}
