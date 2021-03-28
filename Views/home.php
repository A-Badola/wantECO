<section class="slider">
    <div class="slide-viewer">
      <div class="slide-group">
        <div class="slide slide-1">
          <img src="img/slide-1.jpg" width="100%" alt="1 slide" />
        </div>
        <div class="slide slide-2">
          <img src="img/slide-2.jpg" width="100%" alt="2 slide" />
        </div>
        <div class="slide slide-1">
          <img src="img/slide-3.jpg" width="100%" alt="3 slide" />
        </div>
        <div class="slide slide-1">
          <img src="img/slide-4.jpg" width="100%" alt="4 slide" />
        </div>
      </div>
    </div>
  </section>
  <!--- main part: for get and provide part -->
  <div class="slide-buttons bg-dark"></div>
  <section class="hero">
    <div class="container" >
      <div class="hero__text container--pall">
        <?php if(isset($_SESSION['id'])){ ?>
          <h1>
              Let's hold OUR WORLD in trust for OUR CHILDREN .
          </h1>
          <p>
              Explore the community or Contribute to the communtiy of Sustainable Living 
          </p>
        <?php }else{   ?>
          <h1>
              Live More Sustainably<br >Join our wantECO community
          </h1>
          <p>
              join over `number` people using ways to live more sustainably, talking about their daily eco-friendly and sustainable methods and options, inspiring each other and chatting about all things sustainable! 
          </p>
        <?php  }  ?>   

       <a href="?page=explore" class="button hero__cta">EXPLORE</a>

       <a href=" <?php if(isset($_SESSION['id'])){ echo '?page=contribute'; } else { echo '" data-toggle="modal" data-target="#login-modal'; } ?>" class="button hero__cta">CONTRIBUTE</a>
      </div>
    </div>
  </section>
  <!--- for that trending plastic use sustainable ideas waste management part-->
  <section class="feature ">
    <div class="feature__content container container--pall">
      <div class="feature__intro">
        <h2>Find Out</h2>
        <p>
          what are our members daily eco-friendly and sustainable methods and options are.
        </p>
      </div>
  
      <div class="feature__grid">
        <div class="feature__item">
          <a href="#" >
          <i class="fa fa-newspaper-o" aria-hidden="true" class="feature__icon"></i>
          <div class="feature__title">
            Trending
          </div>
          <div class="feature__description">
            Trending stories and articles that allow you to keep track of your unsustainable methods and daily activities and give you insight about how to tackle them easily.
          </div>
          </a>
        </div>
  
        <div class="feature__item">
          <a href="#" >
          <i class="fa fa-home" aria-hidden="true" class="feature__icon"></i>
          <div class="feature__title">
            Plastic-free products and households.
          </div>
          <div class="feature__description">
            See exactly where your money goes each month which indirectly have climate cost too. See replacement of those products and many more...
          </div>
          </a>
        </div>
  
        <div class="feature__item">
          <a href="#" >
          <i class="fa fa-lightbulb-o" aria-hidden="true" class="feature__icon"></i>
          <div class="feature__title">
            Ideas
          </div>
          <div class="feature__description">
            Ideas and suggesstions about lifestyle changes both at market and individual or consumer level can be the key to healthy environment. 
          </div>
          </a>
        </div>
  
        <div class="feature__item">
          <a href="#" >
          <i class="fa fa-trash" aria-hidden="true" class="feature__icon"></i>
          <div class="feature__title">
            Waste Management
          </div>
          <div class="feature__description">
            Check out some better option to reducee, recycle, reuse and dispose waste products of different kinds.
          </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!--articles to view to fill up the page ,We can put it in slider also if needed-->
  <section class="article">
  <div class="article__content container container--pall">
      <h2>Latest Articles</h2>

      <div class="article__grid">
        <a href="#" class="article__item">
          <div class="article__image" style="background-image: url('./img/img1.jpg')"></div>
          <div class="article__text">
            <div class="article__author">By Ace1</div>
            <div class="article__title">CoolAnt - The beehive cooling</div>
            <div class="article__description">In todays commercial and consumerist world, human dependence on electricity and machines cannot be discounted. However, it is widely established that, not only do existing methods consume high amounts of energy...</div>
          </div>
        </a>
        <a href="#" class="article__item">
          <div class="article__image" style="background-image: url('./img/img2.jpg')"></div>
          <div class="article__text">
            <div class="article__author">By Ace2</div>
            <div class="article__title">Zomato Feeding India
            </div>
            <div class="article__description">In January 2019, Zomato and Feeding India's association gave birth to The Feeding Foundation - moving from a primarily philanthropic relationship to a deeply collaborative alliance. Zomato Feeding India has served over 123 million meals as of January 2021...
            </div>
          </div>
        </a>

        <a href="#" class="article__item">
          <div class="article__image" style="background-image: url('./img/img3.jpg')"></div>
          <div class="article__text">
            <div class="article__author">By Ace3</div>
            <div class="article__title">Sewage into Reusable Water</div>
            <div class="article__description">
              It may be something as small as discarding a cigarette butt on the road or as huge as torching a forest, but if you look around, you will find at least one way in which we have harmed the environment. But what if instead of...
            </div>
          </div>
        </a>

        <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC2963874/" class="article__item">
          <div class="article__image" style="background-image: url('./img/img4.jpg')"></div>
          <div class="article__text">
            <div class="article__author">By Ace4</div>
            <div class="article__title">E-Waste Management: As a Challenge</div>
            <div class="article__description">In India, the quantity of “e-waste” or electronic waste has now become a major problem. Disposal of e-waste is an emerging global environmental and public health issue, as this waste has become the most rapidly growing segment...
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>
  <section class="carbonFootprintCalc">
    <h2>Calculate your carbon emissions</h2>
    <iframe class="calc" 
      width="450"
      height="350"
      src="https://calculator.carbonfootprint.com/calculator.aspx?b=fafafa"
    >
    </iframe>
  </section>
