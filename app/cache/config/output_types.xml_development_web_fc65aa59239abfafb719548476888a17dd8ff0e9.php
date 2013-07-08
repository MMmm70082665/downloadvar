<?php

// This is a compiled Agavi configuration file
// Compiled from: C:/workspace/downloadvar/app/config/output_types.xml
// Generated by: AgaviOutputTypeConfigHandler
// Date: 2013-07-08T04:06:40+0000

$ot = new AgaviOutputType();
$ot->initialize($this->context, array (
  'http_headers' => 
  array (
    'Content-Type' => 'text/html; charset=UTF-8',
  ),
), 'html', array (
  'php' => 
  array (
    'class' => 'AgaviPhpRenderer',
    'instance' => NULL,
    'parameters' => 
    array (
      'assigns' => 
      array (
        'routing' => 'ro',
        'request' => 'rq',
        'controller' => 'ct',
        'user' => 'us',
        'translation_manager' => 'tm',
        'request_data' => 'rd',
      ),
      'default_extension' => '.php',
      'var_name' => 't',
    ),
  ),
), 'php', array (
  'standard' => 
  array (
    'layers' => 
    array (
      'content' => 
      array (
        'class' => 'AgaviFileTemplateLayer',
        'parameters' => 
        array (
        ),
        'renderer' => NULL,
        'slots' => 
        array (
        ),
      ),
      'decorator' => 
      array (
        'class' => 'AgaviFileTemplateLayer',
        'parameters' => 
        array (
          'directory' => 'C:\\workspace\\downloadvar\\app/templates',
          'template' => 'Master',
        ),
        'renderer' => NULL,
        'slots' => 
        array (
          'header' => 
          array (
            'action' => 'Header',
            'module' => 'Context',
            'output_type' => NULL,
            'request_method' => NULL,
            'parameters' => 
            array (
            ),
          ),
          'sidebar' => 
          array (
            'action' => 'Sidebar',
            'module' => 'Context',
            'output_type' => NULL,
            'request_method' => NULL,
            'parameters' => 
            array (
            ),
          ),
          'footer' => 
          array (
            'action' => 'Footer',
            'module' => 'Context',
            'output_type' => NULL,
            'request_method' => NULL,
            'parameters' => 
            array (
            ),
          ),
        ),
      ),
    ),
    'parameters' => 
    array (
    ),
  ),
  'log' => 
  array (
    'layers' => 
    array (
      'content' => 
      array (
        'class' => 'AgaviFileTemplateLayer',
        'parameters' => 
        array (
        ),
        'renderer' => NULL,
        'slots' => 
        array (
        ),
      ),
      'decorator' => 
      array (
        'class' => 'AgaviFileTemplateLayer',
        'parameters' => 
        array (
          'directory' => 'C:\\workspace\\downloadvar\\app/templates',
          'template' => 'Log',
        ),
        'renderer' => NULL,
        'slots' => 
        array (
        ),
      ),
    ),
    'parameters' => 
    array (
    ),
  ),
  'connect' => 
  array (
    'layers' => 
    array (
      'content' => 
      array (
        'class' => 'AgaviFileTemplateLayer',
        'parameters' => 
        array (
        ),
        'renderer' => NULL,
        'slots' => 
        array (
        ),
      ),
      'decorator' => 
      array (
        'class' => 'AgaviFileTemplateLayer',
        'parameters' => 
        array (
          'directory' => 'C:\\workspace\\downloadvar\\app/templates',
          'template' => 'Connect',
        ),
        'renderer' => NULL,
        'slots' => 
        array (
          'header' => 
          array (
            'action' => 'Header',
            'module' => 'Context',
            'output_type' => NULL,
            'request_method' => NULL,
            'parameters' => 
            array (
            ),
          ),
          'sidebar' => 
          array (
            'action' => 'Sidebar',
            'module' => 'Context',
            'output_type' => NULL,
            'request_method' => NULL,
            'parameters' => 
            array (
            ),
          ),
          'footer' => 
          array (
            'action' => 'Footer',
            'module' => 'Context',
            'output_type' => NULL,
            'request_method' => NULL,
            'parameters' => 
            array (
            ),
          ),
        ),
      ),
    ),
    'parameters' => 
    array (
    ),
  ),
  'news' => 
  array (
    'layers' => 
    array (
      'content' => 
      array (
        'class' => 'AgaviFileTemplateLayer',
        'parameters' => 
        array (
        ),
        'renderer' => NULL,
        'slots' => 
        array (
        ),
      ),
      'decorator' => 
      array (
        'class' => 'AgaviFileTemplateLayer',
        'parameters' => 
        array (
          'directory' => 'C:\\workspace\\downloadvar\\app/templates',
          'template' => 'News',
        ),
        'renderer' => NULL,
        'slots' => 
        array (
          'header' => 
          array (
            'action' => 'Header',
            'module' => 'Context',
            'output_type' => NULL,
            'request_method' => NULL,
            'parameters' => 
            array (
            ),
          ),
          'sidebar' => 
          array (
            'action' => 'Sidebar',
            'module' => 'Context',
            'output_type' => NULL,
            'request_method' => NULL,
            'parameters' => 
            array (
            ),
          ),
          'footer' => 
          array (
            'action' => 'Footer',
            'module' => 'Context',
            'output_type' => NULL,
            'request_method' => NULL,
            'parameters' => 
            array (
            ),
          ),
        ),
      ),
    ),
    'parameters' => 
    array (
    ),
  ),
  'matter' => 
  array (
    'layers' => 
    array (
      'content' => 
      array (
        'class' => 'AgaviFileTemplateLayer',
        'parameters' => 
        array (
        ),
        'renderer' => NULL,
        'slots' => 
        array (
        ),
      ),
      'decorator' => 
      array (
        'class' => 'AgaviFileTemplateLayer',
        'parameters' => 
        array (
          'directory' => 'C:\\workspace\\downloadvar\\app/templates',
          'template' => 'Matter',
        ),
        'renderer' => NULL,
        'slots' => 
        array (
          'header' => 
          array (
            'action' => 'Header',
            'module' => 'Context',
            'output_type' => NULL,
            'request_method' => NULL,
            'parameters' => 
            array (
            ),
          ),
          'sidebar' => 
          array (
            'action' => 'Sidebar',
            'module' => 'Context',
            'output_type' => NULL,
            'request_method' => NULL,
            'parameters' => 
            array (
            ),
          ),
          'footer' => 
          array (
            'action' => 'Footer',
            'module' => 'Context',
            'output_type' => NULL,
            'request_method' => NULL,
            'parameters' => 
            array (
            ),
          ),
        ),
      ),
    ),
    'parameters' => 
    array (
    ),
  ),
  'continue' => 
  array (
    'layers' => 
    array (
      'content' => 
      array (
        'class' => 'AgaviFileTemplateLayer',
        'parameters' => 
        array (
        ),
        'renderer' => NULL,
        'slots' => 
        array (
        ),
      ),
      'decorator' => 
      array (
        'class' => 'AgaviFileTemplateLayer',
        'parameters' => 
        array (
          'directory' => 'C:\\workspace\\downloadvar\\app/templates',
          'template' => 'Continue',
        ),
        'renderer' => NULL,
        'slots' => 
        array (
          'header' => 
          array (
            'action' => 'Header',
            'module' => 'Context',
            'output_type' => NULL,
            'request_method' => NULL,
            'parameters' => 
            array (
            ),
          ),
          'sidebar' => 
          array (
            'action' => 'Sidebar',
            'module' => 'Context',
            'output_type' => NULL,
            'request_method' => NULL,
            'parameters' => 
            array (
            ),
          ),
          'footer' => 
          array (
            'action' => 'Footer',
            'module' => 'Context',
            'output_type' => NULL,
            'request_method' => NULL,
            'parameters' => 
            array (
            ),
          ),
        ),
      ),
    ),
    'parameters' => 
    array (
    ),
  ),
  'admin' => 
  array (
    'layers' => 
    array (
      'content' => 
      array (
        'class' => 'AgaviFileTemplateLayer',
        'parameters' => 
        array (
        ),
        'renderer' => NULL,
        'slots' => 
        array (
        ),
      ),
      'decorator' => 
      array (
        'class' => 'AgaviFileTemplateLayer',
        'parameters' => 
        array (
          'directory' => 'C:\\workspace\\downloadvar\\app/templates',
          'template' => 'Admin',
        ),
        'renderer' => NULL,
        'slots' => 
        array (
          'header' => 
          array (
            'action' => 'Header',
            'module' => 'Widgets',
            'output_type' => NULL,
            'request_method' => NULL,
            'parameters' => 
            array (
            ),
          ),
          'nav' => 
          array (
            'action' => 'Nav',
            'module' => 'Widgets',
            'output_type' => NULL,
            'request_method' => NULL,
            'parameters' => 
            array (
            ),
          ),
          'sidebar' => 
          array (
            'action' => 'Sidebar',
            'module' => 'Widgets',
            'output_type' => NULL,
            'request_method' => NULL,
            'parameters' => 
            array (
            ),
          ),
          'dashboard' => 
          array (
            'action' => 'Dashboard',
            'module' => 'Widgets',
            'output_type' => NULL,
            'request_method' => NULL,
            'parameters' => 
            array (
            ),
          ),
          'footer' => 
          array (
            'action' => 'Footer',
            'module' => 'Widgets',
            'output_type' => NULL,
            'request_method' => NULL,
            'parameters' => 
            array (
            ),
          ),
        ),
      ),
    ),
    'parameters' => 
    array (
    ),
  ),
  'wrapped' => 
  array (
    'layers' => 
    array (
      'content' => 
      array (
        'class' => 'AgaviFileTemplateLayer',
        'parameters' => 
        array (
        ),
        'renderer' => NULL,
        'slots' => 
        array (
        ),
      ),
      'wrapper' => 
      array (
        'class' => 'AgaviFileTemplateLayer',
        'parameters' => 
        array (
          'extension' => '.wrapper.php',
        ),
        'renderer' => NULL,
        'slots' => 
        array (
        ),
      ),
      'decorator' => 
      array (
        'class' => 'AgaviFileTemplateLayer',
        'parameters' => 
        array (
          'directory' => 'C:\\workspace\\downloadvar\\app/templates',
          'template' => 'Master',
        ),
        'renderer' => NULL,
        'slots' => 
        array (
          'nav' => 
          array (
            'action' => 'Widgets.Navigation',
            'module' => 'Default',
            'output_type' => NULL,
            'request_method' => NULL,
            'parameters' => 
            array (
            ),
          ),
        ),
      ),
    ),
    'parameters' => 
    array (
    ),
  ),
  'simple' => 
  array (
    'layers' => 
    array (
      'content' => 
      array (
        'class' => 'AgaviFileTemplateLayer',
        'parameters' => 
        array (
        ),
        'renderer' => NULL,
        'slots' => 
        array (
        ),
      ),
    ),
    'parameters' => 
    array (
    ),
  ),
  'slot' => 
  array (
    'layers' => 
    array (
      'content' => 
      array (
        'class' => 'AgaviFileTemplateLayer',
        'parameters' => 
        array (
        ),
        'renderer' => NULL,
        'slots' => 
        array (
        ),
      ),
    ),
    'parameters' => 
    array (
    ),
  ),
), 'standard', NULL);
$this->outputTypes['html'] = $ot;
$this->defaultOutputType = 'html';

?>