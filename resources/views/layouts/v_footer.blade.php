  <div class="divider"></div>

  <section class="cta text-center">
      <div class="container">
          <h3 class="mt-0 mb-4">Sign up now to save 10% on your first order</h3>
          <form class="subscribe">
              <div class="form-group row pt-3">
                  <div class="col-sm-8 mb-3">
                      <input type="text" class="form-control" id="inputName" placeholder="Your Name">
                  </div>
                  <div class="col-sm-4">
                      <button type="submit" class="btn btn-lg btn-outline-primary">Sign me up</button>
                  </div>
              </div>
          </form>
      </div>
  </section>

  <footer class="footer">
      <div class="container">
          <div class="row mb-5 text-center">
              <div class="col-sm-6 col-md-3 pt-2">
                  <h5>Quick Links</h5>
                  <ul class="nav-footer">
                      <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                      <li class="nav-item"><a class="nav-link" href="{{ route('products') }}">Produk</a></li>
                  </ul>
              </div>
              <div class="col-sm-6 col-md-3 pt-2">
                  <h5>Men's</h5>
                  <ul class="nav-footer">
                      <li class="nav-item"><a class="nav-link" href="#">Link Item</a></li>
                      <li class="nav-item"><a class="nav-link" href="#">Link Item</a></li>
                  </ul>
              </div>
              <div class="col-sm-6 col-md-3 pt-2">
                  <h5>Girl's</h5>
                  <ul class="nav-footer">
                      <li class="nav-item"><a class="nav-link" href="#">Link Item</a></li>
                      <li class="nav-item"><a class="nav-link" href="#">Link Item</a></li>
                  </ul>
              </div>
              <div class="col-sm-6 col-md-3 pt-2">
                  <h5>Boy's</h5>
                  <ul class="nav-footer">
                      <li class="nav-item"><a class="nav-link" href="#">Link Item</a></li>
                      <li class="nav-item"><a class="nav-link" href="#">Link Item</a></li>
                  </ul>
              </div>
          </div>
      </div>

      <div class="container-fluid">
          <div class="divider"></div>
      </div>

      <div class="container">
          <div class="row">
              <div class="col-md-6 text-center text-md-left mt-2 mb-3 pt-1">
                  <p class="copyright">Copyright &copy; PinfinderClub.id.</a>
                  </p>
              </div>
              <div class="col-md-6 text-center text-md-right mb-4">
                  <ul class="social">
                      <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                      <li><a href="#" title="Google+"><i class="fab fa-google"></i></a></li>
                      <li><a href="#" title="Dribbble"><i class="fab fa-dribbble"></i></a></li>
                      <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                      <div class="clear"></div>
                  </ul>
              </div>
          </div>
      </div>
  </footer>

  <!-- Placed at the end of the document so the pages load faster -->
  <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
      integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
      integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
  </script>

  @stack('scripts')

  </body>

  </html>
