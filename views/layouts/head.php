<!-- MAIN STYLE -->

<link rel="stylesheet" type="text/css" media="screen" title="white-theme" href="<?php echo $this->theme->getBaseUrl() . '/css/theme.css'; ?>">

<!-- DARK CSS -->
<link href="<?php echo $this->theme->getBaseUrl() . '/css/dark.css'; ?>" rel="stylesheet">


<!-- OTHER -->
<link href="<?php echo $this->theme->getBaseUrl() . '/css/lightbox.css'; ?>" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans|PT+Sans|Ubuntu+Condensed&subset=latin,cyrillic" rel="stylesheet" type="text/css">

<!-- MARKDOWN IN SPACES -->	
<?php $this->registerJsFile( $this->theme->getBaseUrl().'/js/humhub_markdown.js', ['position'=>\yii\web\View::POS_END]); ?>
