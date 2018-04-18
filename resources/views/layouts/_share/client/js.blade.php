<script src="{{ asset('games/javascript/bossthemes/common.js')}}" type="text/javascript">
  </script>
  <script src="{{ asset('games/javascript/bossthemes/cs.bossthemes.js')}}" type="text/javascript">
  </script>
  <script src="{{ asset('games/javascript/bossthemes/carouFredSel-6.2.0.js')}}" type="text/javascript">
  </script>
  <script src="{{ asset('games/javascript/bossthemes/tabs.js')}}" type="text/javascript">
  </script>
  <script src="{{ asset('games/javascript/bossthemes/jquery.tools.min.js')}}" type="text/javascript">
  </script>
  <script src="{{ asset('games/javascript/bossthemes/jquery.revolution.min.js')}}" type="text/javascript">
  </script>
  <script src="{{ asset('games/javascript/bossthemes/jquery.appear.js')}}" type="text/javascript">
  </script>
  <script src="{{ asset('games/javascript/bossthemes/jquery.smoothscroll.js')}}" type="text/javascript">
  </script>
  <script src="{{ asset('games/javascript/bossthemes/jquery.DEPreLoad.js')}}" type="text/javascript">
  </script>
  <script src="{{ asset('games/javascript/bossthemes/bootstrap-select.js')}}" type="text/javascript">
  </script>
  <script type="text/javascript">
  <!--
  $(document).ready(function() {
  "use strict";
    var loader = $("body").DEPreLoad({
        OnStep: function(percent) {
            $("#depreload .cs_perc").text(percent + "%");
        },
        OnComplete: function() {
            setTimeout(function(){
                $("#depreload").css('display','none');
            }, 200);
        }
    });
  });
  //-->
  </script>
  <script type="text/javascript">
  <!--
  $(window).scroll(function() {
  "use strict";
    var height_header = $('#bt_header').height();           
    if($(window).scrollTop() > height_header) {
        
        $('.bt-comb').addClass('bt-menu-fixed animated');
    } else {
        $('.bt-comb').removeClass('bt-menu-fixed animated');
    }
  });
  //-->
  </script>