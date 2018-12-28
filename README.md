# Blog example for MODX

A [clean Bootstrap blog theme](https://github.com/BlackrockDigital/startbootstrap-clean-blog) created by Start Bootstrap and made into a MODX Package using [Orchestrator](https://github.com/LippertComponents/Orchestrator). 

## Installation

1. Install MODX
2. Install the following extras via the MODX Manager
  - Collections
  - FormIt
  - Tagger
  - Ace - optional
  - TinyMCE Rich Text Editor - optional
  - VersionX - optional
3. First install [Orchestrator](https://github.com/LippertComponents/Orchestrator) using [Local Orchestrator Example](https://github.com/LippertComponents/LocalOrchestrator)
4. Open up the composer.json file created above in the core directory and then add
  - `"joshua19/modx-clean-blog": "dev-master"` to the require 
  - `"joshua19/modx-clean-blog", "lci/stockpile"` to the extra array
  - Add repositories after the extra array:  
  ```
    "repositories": [
       {
         "type": "vcs",
         "url": "https://github.com/jgulledge19/Clean-Blog"
       }
     ], 
  ```
5. Run `composer update`

## Blog

- [Clean Blog](https://github.com/BlackrockDigital/startbootstrap-clean-blog)
- [Bootstrap](https://getbootstrap.com/)

## MODX Elements created

After installing the following will be created and have the prefix: jg19Clean. See the Blend Migration file [InstallCleanBlog](src/database/migrations/InstallCleanBlog.php)

### Chunks

Read about [MODX Chunks](https://docs.modx.com/revolution/2.x/making-sites-with-modx/structuring-your-site/chunks)

| Name | Description |
| --- | --- | 
| [j19CleanCSS](src/elements/chunks/j19CleanCSS.tpl) | Global CSS |
| [j19CleanFooter](src/elements/chunks/j19CleanFooter.tpl) | Clean Blog Footer |
| [j19CleanJS](src/elements/chunks/j19CleanJS.tpl) | Global JavaScript |
| [j19CleanMeta](src/elements/chunks/j19CleanMeta.tpl) | Meta elements |
| [j19CleanNav](src/elements/chunks/j19CleanNav.tpl) | Clean Blog Navigation |
| [j19CleanOpenGraph](src/elements/chunks/j19CleanOpenGraph.tpl) | Open Graph for Clean Blog |
| [j19CleanPostItem](src/elements/chunks/j19CleanPostItem.tpl) | A single post item to be iterated in a collection |


### Snippets
 
| Name | Description |
| --- | --- | 
| [j19CleanPaginator](src/elements/snippets/j19CleanPaginator.php) | Paginates blog posts |

### Templates

Read about [MODX Templates](https://docs.modx.com/revolution/2.x/making-sites-with-modx/structuring-your-site/templates)

| Name | Description |
| --- | --- | 
| [j19CleanBasic](src/elements/templates/j19CleanBasic.tpl) | |
| [j19CleanBlog](src/elements/templates/j19CleanBlog.tpl) | |
| [j19CleanContact](src/elements/templates/j19CleanContact.tpl) | |
| [j19CleanPost](src/elements/templates/j19CleanPost.tpl) | |


### Template Variables

Read about [MODX Template Variables](https://docs.modx.com/revolution/2.x/making-sites-with-modx/customizing-content/template-variables)

| Name | Description |
| --- | --- | 
| j19CleanLimit | Limit the number of blog posts |
| j19CleanMastHead | The masthead background image |
| j19CleanSubheading | The subheading |

### System Settings

| Name | Description |
| --- | --- | 
| j19Clean.twitter | Twitter URL in footer |
| j19Clean.facebook | Facebook URL in footer |
| j19Clean.github | Github URL in footer |
| j19Clean.home | Resource ID of home page for navigation |
| j19Clean.about | Resource ID of about page for navigation |
| j19Clean.blog | Resource ID of blog collection page for navigation |
| j19Clean.contact | Resource ID of contact page for navigation |

### Update Blog CSS code from source

```
$ rm -rf assets/templates/j19/clean/
$ mkdir assets/templates/j19/clean/
$ cd assets/templates/j19/clean/
$ git clone git@github.com:BlackrockDigital/startbootstrap-clean-blog.git .
$ rm -rf .git
$ rm -rf mail
```