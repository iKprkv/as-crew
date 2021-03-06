
<!-- popup -->
<div class="popup slide-in-popup">
  <!-- default menu--->
  <div class="container main-menu">
    <div class="p-nav">
      <div class="text-wrapper">
        <a href="/pages/cases.php" class="text c-fff t-100 t-w-800 t-lh-1-2 text-appear hold anim">Cases</a>
      </div>
      <?php
        if ($_SERVER['QUERY_STRING'] == 'data-go=overview' || $_SERVER['QUERY_STRING'] == 'data-go=about-us') {
          echo '
          <div class="text-wrapper">
            <span data-go="overview" class="text c-fff t-100 t-w-800 t-lh-1-2 text-appear hold anim">What We Do</span>
          </div>
          <div class="text-wrapper">
            <span data-go="about-us" class="text c-fff t-100 t-w-800 t-lh-1-2 text-appear hold anim">About</span>
          </div>
          ';
        }
        else {
          echo '
          <div class="text-wrapper">
            <a href="/?data-go=overview" data-go="overview" class="text c-fff t-100 t-w-800 t-lh-1-2 text-appear hold anim">What We Do</a>
          </div>
          <div class="text-wrapper">
            <a href="/?data-go=about-us" data-go="about-us" class="text c-fff t-100 t-w-800 t-lh-1-2 text-appear hold anim">About</a>
          </div>
          ';
        }
      ?>
      <!-- <div class="text-wrapper">
        <a href="/pages/blog.php" class="text c-fff t-100 t-w-800 t-lh-1-2 text-appear hold anim">Blog</a>
      </div> -->
    </div>
    <div class="columns peer">
      <!----->
      <div class="col mailto">
        <div class="row">
          <div class="fade-in hold anim">
            <a class=" t-30 t-w-800 t-lh-1.2 t-a-left c-fff underline" href="mailto:hey@as-crew.com?subject=Hey&nbsp;AS-crew!">hey@as-crew.com</a>
          </div>
        </div>
      </div>
      <!----->
      <div class="col phone">
        <div class="fade-in hold anim">
          <a href="tel:18636062334" class="t-30 t-w-800 t-lh-1.2 t-a-left c-fff">+1 863 606 2334</a>
        </div>
      </div>
      <!----->
      <div class="col start-project">
        <div class="row hold anim fade-in">
          <div>
            <a class="start-project arrow t-30 t-w-800 t-lh-1.2 t-a-left c-fff t-uppr underline" href="javascript:void(0)">Start a project</a>
          </div>
        </div>
      </div>
      <!----->
      <div class="row">
        <div class="social-bar hold anim fade-in">
          <!---->
          <div>
            <a class="t-14 c-fff t-w-800 t-lh-2 t-uppr" target="_blank" href="https://www.facebook.com/hey.crew.design/">
              <svg xmlns="http://www.w3.org/2000/svg" width="11.189" height="22.249">
                <path data-name="Path 16960"
                  d="M8.165 4.294c0-.139.019-.438.058-.9a3.342 3.342 0 0 1 .526-1.445A4.1 4.1 0 0 1 10.252.6a6.11 6.11 0 0 1 3-.6h3.679v4.009h-2.694a1.1 1.1 0 0 0-.74.3.812.812 0 0 0-.337.56v2.492h3.77c-.039.488-.083.963-.133 1.422l-.149 1.212q-.09.614-.18 1.138h-3.335v11.116H8.165V11.132H5.742V7.361h2.423z"
                  transform="translate(-5.742)" style="fill:#fff" />
              </svg>
            </a>
          </div>
          <!---->
          <div>
            <a class="t-14 c-fff t-w-800 t-lh-2 t-uppr" target="_blank" href="https://www.instagram.com/a.s.crew/">
              <svg xmlns="http://www.w3.org/2000/svg" width="22.756" height="22.756">
                <path data-name="Path 16976"
                  d="M21.9.859A2.809 2.809 0 0 0 19.839 0H2.92A2.809 2.809 0 0 0 .86.859 2.808 2.808 0 0 0 0 2.918v16.919A2.809 2.809 0 0 0 .86 21.9a2.81 2.81 0 0 0 2.059.859h16.919a2.934 2.934 0 0 0 2.918-2.919V2.918A2.809 2.809 0 0 0 21.9.859zM8.172 8.2a4.471 4.471 0 0 1 3.222-1.3 4.489 4.489 0 0 1 3.237 1.3 4.2 4.2 0 0 1 1.341 3.133 4.2 4.2 0 0 1-1.341 3.133 4.487 4.487 0 0 1-3.237 1.3 4.471 4.471 0 0 1-3.222-1.3 4.2 4.2 0 0 1-1.341-3.133A4.2 4.2 0 0 1 8.172 8.2zm12.007 11.03a.863.863 0 0 1-.267.644.883.883 0 0 1-.637.259H3.438a.886.886 0 0 1-.9-.9V9.63h2.085a6.379 6.379 0 0 0-.3 1.941A6.506 6.506 0 0 0 6.4 16.423a6.922 6.922 0 0 0 4.993 2.007 7.121 7.121 0 0 0 3.556-.919 6.917 6.917 0 0 0 2.578-2.5 6.564 6.564 0 0 0 .948-3.444 6.38 6.38 0 0 0-.3-1.941h2v9.6zm0-13.23a1.012 1.012 0 0 1-1.023 1.022h-2.577A1.012 1.012 0 0 1 15.557 6V3.556a1 1 0 0 1 .3-.719.976.976 0 0 1 .726-.3h2.578a.974.974 0 0 1 .726.3.994.994 0 0 1 .3.719z"
                  style="fill:#fff" transform="translate(-.001)" />
              </svg>

            </a>
          </div>
          <!---->
          <div>
            <a class="t-14 c-fff t-w-800 t-lh-2 t-uppr" target="_blank" href="https://www.behance.net/AScrew">
              <svg xmlns="http://www.w3.org/2000/svg" width="35.133" height="22.25">
                <defs>
                  <style>
                    .cls-1 {
                      fill: #fff
                    }
                  </style>
                </defs>
                <g id="behance-logo" transform="translate(1.271 -17.564)">
                  <g id="Group_2596" data-name="Group 2596" transform="translate(-1.271 17.564)">
                    <path id="Path_16974" data-name="Path 16974" class="cls-1"
                      d="M14.179 27.511s3.324-.247 3.324-4.146-2.72-5.8-6.166-5.8H0v21.787h11.338s6.921.219 6.921-6.431c0 .001.302-5.41-4.08-5.41zM5 21.437h6.342s1.541 0 1.541 2.267-.907 2.6-1.934 2.6H5zm6.05 14.044H5v-5.824h6.342s2.3-.029 2.3 2.992c-.007 2.521-1.687 2.806-2.597 2.832z"
                      transform="translate(0 -17.564)" />
                    <path id="Rectangle_949" data-name="Rectangle 949" class="cls-1" transform="translate(22.803 1.284)" d="M0 0h8.99v2.683H0z" />
                    <path id="Path_16975" data-name="Path 16975" class="cls-1"
                      d="M60.492 32.682c-8.379 0-8.372 8.371-8.372 8.371s-.574 8.329 8.372 8.329c0 0 7.456.426 7.456-5.795h-3.835s.128 2.344-3.493 2.344a3.544 3.544 0 0 1-3.834-3.792h11.29s1.235-9.457-7.584-9.457zm3.408 6.549h-7.157a3.9 3.9 0 0 1 3.834-3.358 3.243 3.243 0 0 1 3.323 3.358z"
                      transform="translate(-33.002 -27.138)" />
                  </g>
                </g>
              </svg>
            </a>
          </div>
          <!---->
          <div>
            <a class="t-14 c-fff t-w-800 t-lh-2 t-uppr" target="_blank" href="https://www.etsy.com/shop/AScrew?ref=profile_header">
              <svg xmlns="http://www.w3.org/2000/svg" width="19.624" height="22.249">
                <path
                  d="m38.869 15.744-.759 2.442a3.112 3.112 0 0 1-2.971 2.188h-5.814a1.563 1.563 0 0 1-1.563-1.563v-6.56h4.209a2 2 0 0 1 2 2v.515a.277.277 0 0 0 .277.277h.863a.277.277 0 0 0 .277-.277V7.194a.277.277 0 0 0-.277-.277h-.863a.277.277 0 0 0-.277.277V8a2 2 0 0 1-2 2h-4.209V3.438a1.563 1.563 0 0 1 1.563-1.563h5.521a2.584 2.584 0 0 1 2.584 2.584v1.556a.277.277 0 0 0 .277.277h1.009a.277.277 0 0 0 .276-.255l.425-5.348A.639.639 0 0 0 38.78 0H21.244a.441.441 0 0 0-.444.441v.993a.441.441 0 0 0 .441.441h1.122a1.563 1.563 0 0 1 1.563 1.563v15.373a1.563 1.563 0 0 1-1.563 1.563h-1.119a.441.441 0 0 0-.441.441v.993a.441.441 0 0 0 .441.441h17.677a.639.639 0 0 0 .632-.544l.871-5.837a.277.277 0 0 0-.274-.318h-1.016a.277.277 0 0 0-.265.194z"
                  transform="translate(-20.803)" style="fill:#fff" />
              </svg>

            </a>
          </div>
          <!---->
        </div>
      </div>
    </div>
    <!---->

    <!---->
  </div>

  <!-- start project --->
  <div class="container start-project" style="display:none;">
    <div class="wrapper">
      <!--- back ---->
      <a class="back t-19 t-w-800 t-lh-3 t-a-left c-fff underline text-appear hold anim">Back</a>
      <!-- title --->
      <div class="title t-100 c-fff t-w-800 t-lh-1-5 ">
        <div class="text-wrapper">
          <div class="text text-appear hold anim">Tell us what</div>
        </div>
        <div class="text-wrapper">
          <div class="text text-appear hold anim">excites you</div>
        </div>
      </div>
      <!---->
      <div class="form-area fade-in hold anim">
        <!----->
        <form id="send-new-project" name="send-new-project" enctype="multipart/form-data" method="post" onsubmit="send(event, '/send.php')">
          <div class="row two-cols">
            <!----->
            <div class="column">
              <div class="label">
                <label for="explicit-label-name">Name</label>
              </div>
              <div class="input ">
                <input type="text" id="explicit-label-name" name="name" />
              </div>
            </div>
            <!----->
            <div class="column"></div>
            <!----->
            <div class="column">
              <div class="label">
                <label for="explicit-label-last-name">Last name</label>
              </div>
              <div class="input">
                <input type="text" id="explicit-label-last-name" name="last-name" />
              </div>
            </div>
            <!----->
            <div class="column">
              <div class="label">
                <label for="explicit-label-email">Email</label>
              </div>
              <div class="input">
                <input type="mail" id="explicit-label-email" name="email" />
              </div>
            </div>
            <!----->
          </div>
          <!----->
          <div class="row">
            <!----->
            <div class="column">
              <div class="label">Services</div>
              <div class="input">
                <div class="scroll-overflow">
                  <!----->
                  <input type="checkbox" class="custom-checkbox" id="interface-design" name="service[]" value="interface-design">
                  <label for="interface-design">Interface Design</label>
                  <!----->
                  <input type="checkbox" class="custom-checkbox" id="identity" name="service[]" value="identity">
                  <label for="identity">Identity</label>
                  <!----->
                  <input type="checkbox" class="custom-checkbox" id="illustration" name="service[]" value="illustration">
                  <label for="illustration">Illustration</label>
                  <!----->
                  <input type="checkbox" class="custom-checkbox" id="development" name="service[]" value="development">
                  <label for="development">Development</label>
                  <!----->
                </div>
              </div>
            </div>
            <!----->
          </div>
          <div class="row">
            <!----->
            <div class="column">
              <div class="label">
                <label for="explicit-label-text">Tell us about your project...</label>
              </div>
              <div class="input">
                <textarea id="explicit-label-text" name="text" oninput='this.style.height = "";this.style.height = (this.scrollHeight) + "px"' rows="1"></textarea>
              </div>
            </div>
            <!----->
            <div class="column file">
              <input id="file-select" name="myfile[]" multiple type="file" name="file" accept=".jpg,.jpeg,.png,.pdf,.doc,.docx" class="custom-file-input">
            </div>
          </div>
          <div class="file-list"></div>
          <div class="button-area">
            <input value="send" type="submit">
          </div>
        </form>
        <!----->
      </div>
      <!----->
    </div>
    <!----->
  </div>
  <!----->
</div>
<script src="<?php echo SCRIPTPATH.'core/form.js' ?>"></script>
