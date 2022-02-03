 {{-- NAVBAR --}}
 <nav class="navbar navbar-expand-md sticky-top navbar-light d-flex bg-oranges">
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto ml-auto">
            <li class="nav-item">
                <a href="about" class="nav-link text-black {{ ($title === 'About')  ? 'active' : '' }}">About</a>
            </li>
            <li class="nav-item">
                <a href="contact" class="nav-link text-black {{ ($title === 'Contacts')  ? 'active' : '' }}">Contact</a>
            </li>
            <li class="nav-item">
                <a href="/" class="nav-link text-black {{ ($title === 'Home')  ? 'active' : '' }}">| WAREK |</a>
            </li>
            <li class="nav-item">
                <a href="products" class="nav-link text-black {{ ($title === 'Products')  ? 'active' : '' }}">Product</a>
            </li>
            <li class="nav-item">
                <a href="cart" class="nav-link text-black {{ ($title === 'Cart')  ? 'active' : '' }}">Cart</a>
            </li>
        </ul>
    </div>
</nav>