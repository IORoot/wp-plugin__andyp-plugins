

<div id="top"></div>

<div align="center">

<div style="filter: invert(54%) sepia(99%) saturate(388%) hue-rotate(90deg) brightness(95%) contrast(86%);">
<img src="https://cdn.jsdelivr.net/npm/@mdi/svg@6.7.96/svg/toy-brick-plus.svg" style="width:200px;"/>
</div>

<h3 align="center">AndyP Plugin Manager</h3>

<p align="center">
    Lists all installed AndyP-based (IORoot) plugins with detailed information.
</p>    
</div>

##  1. <a name='TableofContents'></a>Table of Contents


* 1. [Table of Contents](#TableofContents)
* 2. [About The Project](#AboutTheProject)
	* 2.1. [Built With](#BuiltWith)
	* 2.2. [Installation](#Installation)
* 3. [Usage](#Usage)
* 4. [Customising](#Customising)
* 5. [Troubleshooting](#Troubleshooting)
* 6. [Contributing](#Contributing)
* 7. [License](#License)
* 8. [Contact](#Contact)



##  2. <a name='AboutTheProject'></a>About The Project

Built to list and describe all plugins that I've written that are installed on a particular wordpress installation.

![screenshot](https://github.com/IORoot/wp-plugin__andyp-plugins/blob/master/files/screenshot.png?raw=true)

> This plugin requires [ACF Pro](https://advancedcustomfields.com/) to run.

This was also a good exercise in managing my custom plugins.

It works by having all of my plugins hitting a custom hook that triggers this manager. The plugin is then listed.

<p align="right">(<a href="#top">back to top</a>)</p>



###  2.1. <a name='BuiltWith'></a>Built With

This project was built with the following frameworks, technologies and software.

* [ACF Pro](https://advancedcustomfields.com/)
* [Composer](https://getcomposer.org/)
* [PHP](https://php.net/)
* [Wordpress](https://wordpress.org/)

<p align="right">(<a href="#top">back to top</a>)</p>



###  2.2. <a name='Installation'></a>Installation

These are the steps to get up and running with this plugin.

1. Clone the repo into your wordpress plugin folder
    ```bash
    git clone https://github.com/IORoot/wp-plugin__andyp-plugins ./wp-content/plugins/andyp-plugins
    ```
1. Move into the directory.
    ```bash
    cd ./wp-content/plugins/andyp-plugins
    ```
1. Run composer to install any dependencies
    ```bash
    composer install
    ```
1. Activate the plugin.


<p align="right">(<a href="#top">back to top</a>)</p>

##  3. <a name='Usage'></a>Usage

Once the plugin have been enabled, you can visit the "ANDYP" Side-bar menu at the top.

This will then list any ANDYP plugins installed, along with their Plugin Path, Repo, README files and GIT log.

##  4. <a name='Customising'></a>Customising

None Required.

##  5. <a name='Troubleshooting'></a>Troubleshooting

If you are getting a fatal error when activating, you probably haven't ran `composer install` which downloads `parsedown`.

```php
Warning: require(/var/www/html/wp-content/plugins/wp-plugin__andyp-plugins/vendor/autoload.php): Failed to open stream: No such file or directory in /var/www/html/wp-content/plugins/wp-plugin__andyp-plugins/andyp-plugins.php on line 14 Fatal error: Uncaught Error: Failed opening required '/var/www/html/wp-content/plugins/wp-plugin__andyp-plugins/vendor/autoload.php' (include_path='.:/usr/local/lib/php') in /var/www/html/wp-content/plugins/wp-plugin__andyp-plugins/andyp-plugins.php:14 Stack trace: #0 /var/www/html/wp-admin/includes/plugin.php(2288): include_once() #1 /var/www/html/wp-admin/plugins.php(192): plugin_sandbox_scrape('wp-plugin__andy...') #2 {main} thrown in /var/www/html/wp-content/plugins/wp-plugin__andyp-plugins/andyp-plugins.php on line 14
```

<p align="right">(<a href="#top">back to top</a>)</p>


##  6. <a name='Contributing'></a>Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue.
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#top">back to top</a>)</p>



##  7. <a name='License'></a>License

Distributed under the MIT License.

MIT License

Copyright (c) 2022 Andy Pearson

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

<p align="right">(<a href="#top">back to top</a>)</p>



##  8. <a name='Contact'></a>Contact

Author Link: [https://github.com/IORoot](https://github.com/IORoot)

<p align="right">(<a href="#top">back to top</a>)</p>
