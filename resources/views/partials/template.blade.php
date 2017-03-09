<!DOCTYPE html>
<html lang="en">

@include('partials.head')

  <body>

  <section id="container" >
@include('partials.header')
@if (Auth::check())   
      <aside>
          <div id="sidebar"  class="nav-collapse">

              <ul class="sidebar-menu" id="nav-accordion">
                         
              	  <p class="centered"><a href="#"><img src="{{ asset('back/img/ui-sam.jpg') }}" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">{{ Auth::user()->name }}</h5>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Employee</span>
                      </a>
                      <ul class="sub">
                        
                          <li><a  href="{{ url('candidate') }}">Candidate</a></li>
                          <li><a  href="{{ url('college') }}">College</a></li>
                          <li><a  href="{{ url('degree') }}">Degree</a></li>
                          <li><a  href="{{ url('religion') }}">Religion</a></li>
                          <li><a  href="{{ url('status') }}">Status</a></li>
                      </ul>
                  </li>
              </ul>
             
          </div>
      </aside>
@endif
@yield('main')

        <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is - Modified by Ryan
              <a href="#container" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
        </footer>
  </section>
@include('partials.script')

  </body>
</html>
