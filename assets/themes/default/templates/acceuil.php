<!DOCTYPE html>
<html lang="{{ metaLanguage }}">
  <head>
    <meta charset="utf-8" />

    <title>{{ title }}</title>
    <base href="{{ baseHref }}" />

    <meta name="description" content="{{ metaDescription }}" />
    <meta name="keywords" content="{{ metaKeywords }}" />
    <meta name="author" content="{{ metaPublisher }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="application-name" content="FAQ-COVID19" />
    <meta name="robots" content="{{ metaRobots }}" />
    <meta name="revisit-after" content="7 days" />

    <link rel="stylesheet" type="text/css" href=" \assets\dist\css\bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ baseHref }}assets/dist/styles.css" />

    <link rel="shortcut icon" href="{{ baseHref }}assets/themes/{{ tplSetName }}/img/favicon.ico" />
    <link rel="apple-touch-icon" href="{{ baseHref }}assets/themes/{{ tplSetName }}/img/apple-touch-icon.png" />
    <link rel="canonical" href="{{ currentPageUrl }}" />

    <link rel="alternate" title="News RSS Feed" type="application/rss+xml" href="{{ baseHref }}feed/news/rss.php" />
    <link rel="alternate" title="TopTen RSS Feed" type="application/rss+xml" href="{{ baseHref }}feed/topten/rss.php" />
    <link
      rel="alternate"
      title="Latest FAQ Records RSS Feed"
      type="application/rss+xml"
      href="{{ baseHref }}feed/latest/rss.php"
    />

    <link rel="alternate" title="Open Questions RSS Feed" type="application/rss+xml" href="{{ baseHref }}feed/openquestions/rss.php" />
    <link rel="search" type="application/opensearchdescription+xml" title="{{ metaTitle }}" href="{{ opensearch }}" />
    <script type="text/javascript" src="\assets\dist\js\bootstrap.min.js"></script>
    <script type="text/javascript" src="\assets\dist\js\jquery-3.5.1"></script>

    <script>
      if (self === top) {
        document.documentElement.style.display = 'block';
      } else {
        top.location = self.location;
      }
    </script>
    <style>
      html {
        display: none;
      }
      #logocmr{
        width: 5.5ex;
         margin-left: -500%;
      }
      #pmf-navbar-toggle{
        font-size:150%;
      }
      #logouds{
        width: 5ex;
         margin-left: 10rem; 
         padding-right: -50rem;  
      }
      }
    </style>
  </head>
  <body class="flex-column" dir="{{ dir }}">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        <a class="navbar-brand" id="phpmyfaq-logo" title="{{ header }}" href="{{ faqHome }}">
          <img id="logocmr" src="{{ baseHref }}assets/themes/{{ tplSetName }}/img/logoCMR.png" alt="{{ header }}" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#pmf-navbar-toggle"
          aria-controls="pmf-navbar-toggle"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="pmf-navbar-toggle">
          <ul class="navbar-nav mr-md-12">
            <li class="nav-item {{ activeAllCategories }}">
              {{ allCategories }}
            </li>
           <!-- <li class="nav-item {{ activeAddContent }}">{{ msgAddContent }}</li>
            <li class="nav-item {{ activeAddQuestion }}">{{ msgQuestion }}</li>
            <li class="nav-item {{ activeOpenQuestions }}">
              {{ msgOpenQuestions }}
            </li>
            -->
            <li class="nav-item">  </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="dropdown"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                {{ msgLoginUser }}
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdown">
                [notLoggedIn]
                <div>
                  {{ msgRegisterUser }} {{ msgLoginUser }}
                </div>
                [/notLoggedIn] [userloggedIn]
                <div>
                  {{ msgUserControlDropDown }} {{ msgUserControl }}
                  <div class="dropdown-divider"></div>
                  {{ msgUserRemoval }}
                  <div class="dropdown-divider"></div>
                  {{ msgLogoutUser }}
                </div>
                [/userloggedIn]
              </div>
            </li>
          </ul>
          <a class="navbar-brand" id="phpmyfaq-logo" title="{{ header }}" href="{{ faqHome }}">
            <img id="logouds" src="{{ baseHref }}assets/themes/{{ tplSetName }}/img/logoUDS.png" 
            alt="{{ header }}" />
          </a>
        </div>
      </div>
    </nav>

    <!-- SEARCH -->
    <section class="has-primary">
      <div class="pmf-masthead pmf-single-masthead">
        <div class="container">
          <div class="row">
           <div class="col-lg-8 mx-md-auto" style="margin-right:50%;">
              <form role="search" id="search" action="{{ writeSendAdress }}" method="post">
                <input
                  type="text"
                 class="typeahead pmf-search-field"
                  placeholder="{{ searchBox }} ..." name="search" autocomplete="off" data-provide="typeahead" value="{{ searchTerm }}"/>
                <button type="submit"><i class="fa fa-search"></i></button>
                <small class="form-text text-muted">
                  <a class="help" href="?action=search" style="font-size: 150%; color:rgb(0,162,232);">{{ msgAdvancedSearch }}</a>
                </small>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  

    <!-- BREADCRUMB -->
    [breadcrumb]
    <section class="pmf-breadcrumbs">
      <div class="container">
        <!{{ breadcrumbHeadline }}
      </div>
    </section>
    [/breadcrumb]

    <!-- MAIN CONTENT -->
    <section id="wrapper" class="mt-3">
      <div class="container">
        <div class="row">
          <!-- google search bar -->
          <script async src="https://cse.google.com/cse.js?cx=006096414011633056878:nkhptqbqi98"></script>
          <div class="gcse-search"></div>
          {{ mainPageContent }}
        </div>
      </div>
    </section>
    <div >
    <footer class="pmf-footer font-small"  style="position:relative; margin-top:25%; float:bottom;">

     <!--
      <div class="container">
        <div class="row">
          
          <div class="col-md-6 mb-4">
            
            <ul class="pmf-footer-menu">
              
              <li class="foot-menu-item">
                {{ faqOverview }}
              </li>
            
              <li class="foot-menu-item">
                {{ showSitemap }}
              </li>
              <li class="foot-menu-item">
                {{ msgGlossary }}
              </li>
              <li class="foot-menu-item">
                {{ msgContact }}
              </li>
            </ul>
          </div>
          <div class="col-md-6 mb-4">
      <form action="{{ renderUri }}" method="post" accept-charset="utf-8" class="pmf-footer-language">   
      {{ switchLanguages }}
      <input type="hidden" name="action" value="" />
    </form>

          </div>
       
        </div>
      </div>
            -->
      <div class="text-center clor py-3">{{ copyright }}</div>
      [debugMode]
      <div class="container debug-mode">
        <hr />
        <h4>DEBUG INFORMATION</h4>
        <div class="row">
          <div class="col-12">
            <h5>EXCEPTIONS</h5>
            {{ debugExceptions }}
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <h5>DATABASE QUERIES</h5>
            {{ debugQueries }}
          </div>
        </div>
      </div>
      [/debugMode]
    </footer>
    </div>

    <script src="{{ baseHref }}assets/dist/vendors.js"></script>
    <script src="{{ baseHref }}assets/dist/phpmyfaq.js"></script>
    <script src="{{ baseHref }}assets/dist/frontend.js"></script>
    <script>
      $('.topten').tooltip();
      $('.latest-entries').tooltip();
      $('.sticky-faqs').tooltip();
    </script>
    <script>
      window.addEventListener('load', () => {
        window.cookieconsent.initialise({
          palette: {
            popup: {
              background: '#252e39',
            },
            button: {
              background: '#14a7d0',
            },
            revokable: true,
          },
        });
      });
    </script>
  </body>
</html>
