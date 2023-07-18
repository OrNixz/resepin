<a href="index.php" class="brand-link">
  <span class="brand-text font-weight-light d-flex align-items-center justify-content-center">Resepin Dashboard</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="dist/img/gambar_3.png" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <a href="#" class="d-block">Admin</a>
    </div>
  </div>

  <!-- SidebarSearch Form -->
  <div class="form-inline">
    <div class="input-group" data-widget="sidebar-search">
      <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-sidebar">
          <i class="fas fa-search fa-fw"></i>
        </button>
      </div>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="index.php" class="nav-link">
          <i class="nav-icon fas fa-home"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="food_recipe.php" class="nav-link">
          <i class="nav-icon fas fa-utensils"></i>
          <p>
            Food Recipe
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-hamburger"></i>
          <p>
            Recipes
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="add_recipe.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Add Recipe</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="food_recipe.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Edit Recipe</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="food_recipe.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Delete Recipe</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-leaf"></i>
          <p>
            Ingredients
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="add_ingredient.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Add Ingredient</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="food_recipe.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Edit Ingredient</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="food_recipe.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Delete Ingredient</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-shopping-basket"></i>
          <p>
            Recipe Ingredients
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="add_recipe_ingredient.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Add Recipe Ingredient</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="food_recipe.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Edit Recipe Ingredient</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="food_recipe.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Delete Recipe Ingredient</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-list"></i>
          <p>
            Instructions
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="add_instruction.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Add Instruction</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="food_recipe.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Edit Instruction</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="food_recipe.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Delete Instruction</p>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->