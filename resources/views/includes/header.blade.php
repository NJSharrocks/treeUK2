<header class="header">
  <a href="/" class="logo">treeUK</a>
  <input class="menu-btn" type="checkbox" id="menu-btn" />
  <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
  <ul class="menu">
    @if (Auth::guest())
        <li><a href="{{ url('/login') }}">Login</a></li>
        <li><a href="{{ url('/register') }}">Register</a></li>
    @else
    <li><a href="admin/">
      {{ Auth::user()->name }}
    </a></li>
    <li><a href="{{ url('/logout') }}">Logout</a></li>
    @endif
    <li><a href="/woodlands">Find an Ancient Woodland</a></li>
    <li><a href="/project">Tree Plant Project</a></li>
    <li><a href="/about">About Us</a></li>
    <li><a href="/contact">Contact</a></li>

  </ul>
</header>
