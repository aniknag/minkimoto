<footer class="footer">

		<div class="container-fluid">
			<div class="row">
			
			<!--p class="copyright">Copyright © 2017 Início  |  Designed by <a href="#">Minkimoto</a></p-->
      <section class="social-icons">
        <div class="col-md-4 col-md-offset-8">
        <ul>
          <li class="social-btn"><a href="#" target="_blank" alt="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li class="social-btn"><a href="#" target="_blank" alt="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li class="social-btn"><a href="#" target="_blank" alt="RSS"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
        </ul>
        </div>
      </section>
			
			</div>
		</div>
</footer>

</main> 
</div>
<!-- End of page .page-wrapper -->

<svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="goo">
<defs>
  <filter id="goo">
    <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
    <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
    <feComposite in="SourceGraphic" in2="goo"/>
  </filter>
</defs>
</svg>

<script type="text/javascript">
$(function(){
  $('.crsl-items').carousel({
    visible: 2,
    itemMinWidth: 400,
    itemEqualHeight: 370,
    itemMargin: 0,
	carousel: true,
  });
  
  $("a[href=#]").on('click', function(e) {
    e.preventDefault();
  });
});
</script>

</body>
</html>