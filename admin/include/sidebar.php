<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="@Url.Action("Dashboard", "Admin")">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="@Url.Action("Index", "PropertyTypes")">
                <i class="bi bi-houses"></i>
                <span>Property Type</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="@Url.Action("Index", "PropertyStatus")">
                <i class="bi bi-buildings"></i>
                <span>Property Status</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="@Url.Action("Index", "Countries")">
                <i class="bi bi-globe-americas"></i>
                <span>Countries</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="@Url.Action("Index", "States")">
                <i class="bi bi-map"></i>
                <span>States</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="@Url.Action("Index", "Cities")">
                <i class="bi bi-pin-map"></i>
                <span>Cities</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="@Url.Action("Index", "Users")">
                <i class="bi bi-person-vcard"></i>
                <span>Users</span>
            </a>
        </li>

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="@Url.Action("Profile","Admin")">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="@Url.Action("Index", "Faqs")">
                <i class="bi bi-question-circle"></i>
                <span>F.A.Q</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="@Url.Action("Index", "Contacts")">
                <i class="bi bi-envelope"></i>
                <span>Contact</span>
            </a>
        </li><!-- End Contact Page Nav -->

    </ul>

</aside><!-- End Sidebar-->