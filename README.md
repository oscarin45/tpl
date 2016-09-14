# Welcome to CodeIgniter Template! TPLObdc

This documentation is for Codeigniter library

Files needed

*   application/libraries/tpl.php
*   application/libraries/jsmin.php
*   application/libraries/cssmin.php

The required setup is:

```sh
application/controllers/config/autoload.php

$autoload['helper'] = array('url');
$autoload['libraries'] = array('tpl');
```

Example applied to a controller:

```sh
class Welcome extends CI_Controller {
function __construct(){
	parent::__construct();
		$this->load->library('tpl', array('DIR'=>base_url()));
	}
function index(){
|
	$this->tpl
	->set('TITLE','Welcome to CodeIgniter')
	->set_view('VIEW','doc')// ->set_view('VIEW','doc',array(),'parser/view') #Load view
	->set_js('HEAD_JS','js/main.js')
	->set_css('HEAD_CSS','css/normalize.css')
	->site()
	;
	}
}

```

## Function Reference

### $this->load->library('tpl', array())

Load the library and can add variables to the view

```sh
$this->load->library('tpl', array(**'DIR'**=>base_url()));
```

HTML VIEW

```sh
<img src="**{DIR}**image/1.jpg" alt=""/>
```

### $this->tpl->load()

The template is applied to the specified view, default is "site.php"

```sh
$this->tpl->load('welcome_message')
```

### $this->tpl->view()

How to load variables by "load-> view" or "parser-> parse" Applies

```sh
$this->tpl->view('parser') //parser o view
```

### $this->tpl->set()

Apply to replace variables in the template

```sh
$this->tpl->set('TITLE','Welcome to CodeIgniter')``
```

```sh
$this->tpl->set(array(
	'DOC_TITLE'	=> 'View Documentation',
	'DOC_HTML'	=> '/docs/index.html'
	))</pre>
```

### $this->tpl->set_view()

Preloading views into templates replacing the variables listed

`$this->tpl->set_view('VIEW','doc')``$this->tpl->set_view('VIEW','doc',array(),'parser') //parser or view Mode``

```sh
$this->tpl->set_view(array(
	'view1'=>'doc1',
	'view1'=>'doc2',
	'view1'=>'doc3',
	'view4'=>array('doc4',array(),'parser') //parser or view Mode
	))</pre>
```

### $this->tpl->set_js()

Javascript files are added to replace a variable in either compressed into one file or individually generated

`$this->tpl->set_js('HEAD_JS','js/vendor/modernizr-2.6.2.min.js')``

```sh
  $this->tpl->set_js('JS',array(
  	'js/plugins.js',
  	'js/main.js'
  	),true)//TRUE = compress file</pre>
```

### $this->tpl->set_css()

CSS files are added to replace a variable in either compressed into one file or individually generated

```sh
  $this->tpl->set_css('HEAD_CSS',array(
  	'css/normalize.css',
  	'css/main.css'
  	),true)//TRUE = compress file</pre>
  
```

### $this->tpl->site()

Rendering template site
