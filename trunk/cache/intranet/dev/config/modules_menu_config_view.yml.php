<?php
// auto-generated by sfViewConfigHandler
// date: 2011/10/07 22:33:39
$response = $this->context->getResponse();


  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);

  $response->addStylesheet('main.css', '', array ());
  $response->addStylesheet('style.css', '', array ());
  $response->addStylesheet('theme.css', '', array ());
  $response->addStylesheet('switch.css', '', array ());
  $response->addStylesheet('/css/redmond/jquery-ui-1.7.3.custom.css', '', array ());
  $response->addStylesheet('/css/fg.menu.css', '', array ());
  $response->addJavascript('mascara.js', '', array ());
  $response->addJavascript('jquery-1.3.2.min.js', '', array ());
  $response->addJavascript('jquery-ui-1.7.3.custom.min.js', '', array ());
  $response->addJavascript('fg.menu.js', '', array ());


