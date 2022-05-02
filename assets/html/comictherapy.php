---
title: Comic Therapy
permalink: /comictherapy
redirect_from:
- /assets/html/comictherapy
- /assets/html/comictherapy.html

---
{% for item in site.data.nav-proj %}
{% if item.name == "Comic Therapy" %}
  {% include sectiontitle.html %}
{% endif %}
{% endfor %}

<!-- ======= Gallery testing =======  -->
<section class="section site-portfolio">
  <div class="container">
    
    <div id="portfolio-grid" class="row no-gutter justify-content-center">
      <?php
      $dir = /assets/proj/comictherapy/2020/ . DIRECTORY_SEPARATOR . "gallery" . DIRECTORY_SEPARATOR;
      $images = glob("$dir*.{jpg,jpeg,gif,png,bmp,webp}", GLOB_BRACE); 
      foreach ($images as $i) {
        printf("

        <div class="item web col-6 col-sm-6 col-md-4 col-lg-3 mb-4 gallery">
          <a href="/assets/proj/comictherapy/2020/%s" class="item-wrap fancybox">
            <div class="work-info">
              <h3>name</h3>
              <span>category</span>
            </div>
            <img src='gallery/%s' class="img-fluid">
          </a>
        </div>", basename($i));
      }
      ?>
    </div>

  </div>
</section>

<!-- ======= Gallery current =======  -->
<div class="text-center py-5 mb-0"><h2>2021</h2></div>
{% include gallery1.html %}
  {% for item in site.data.gallery-ct %}
  {% if item.category == 2021 %}
    <div class="item web col-6 col-sm-6 col-md-4 col-lg-3 mb-4 gallery">  
    {% include gallery2a.html %}
    </div>
  {% endif %}
  {% endfor %}
{% include gallery3.html %}

<div class="text-center py-5 mb-0"><h2>2020</h2></div>
{% include gallery1.html %}
  {% for item in site.data.gallery-ct %}
  {% if item.category == 2020 %}
    <div class="item web col-6 col-sm-6 col-md-4 col-lg-3 mb-4 gallery2">  
    {% include gallery2a.html %}
    </div>
  {% endif %}
  {% endfor %}
{% include gallery3.html %}