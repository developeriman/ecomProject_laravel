 <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
         E-shop
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item {{Request::is('dashboard')? 'active':''}}  ">
            <a class="nav-link" href="#">
              <i class="material-icons">dashboard</i>
              <p>dashboard</p>
            </a>
          </li>
          <li class="nav-item {{Request::is('categories')? 'active':''}}  ">
            <a class="nav-link" href="{{url('categories')}}">
              <i class="material-icons">person</i>
              <p>categories</p>
            </a>
          </li>

           <li class="nav-item {{Request::is('categories')? 'active':''}}  ">
            <a class="nav-link" href="{{url('add-category')}}">
              <i class="material-icons">person</i>
              <p>Add-Category</p>
            </a>
          </li>
          <hr>
             <li class="nav-item {{Request::is('categories')? 'active':''}}  ">
            <a class="nav-link" href="{{url('category')}}">
              <i class="material-icons">person</i>
              <p>Categorys</p>
            </a>
          </li>

             <li class="nav-item {{Request::is('products')? 'active':''}}  ">
            <a class="nav-link" href="{{url('products')}}">
              <i class="material-icons">person</i>
              <p>Product</p>
            </a>
          </li>

           <li class="nav-item {{Request::is('categories')? 'active':''}}  ">
            <a class="nav-link" href="{{url('add-products')}}">
              <i class="material-icons">person</i>
              <p>Add-Product</p>
            </a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="./tables.html">
              <i class="material-icons">content_paste</i>
              <p>Table List</p>
            </a>
          </li>

        </ul>
      </div>
    </div>