<ul class="nav justify-content-end">
<div>foot</div>
    <li class="mr-auto">
        <a href="$BaseHref">
            <img src='$ThemeDir/dist/img/power.png' alt="Logo" style="width:32px;height:32px" class="mt-3"/>
        </a>
    </li>
    <% loop Menu(1) %>
    <li class="nav-item m-4">
        <a class="p-4" href="$Link" title="$MenuTitle">$MenuTitle</a>
    </li>
    <% end_loop %>
</ul>
