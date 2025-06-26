<?php
session_start();
if ($_SESSION['usuario_rol'] !== 'admin') {
  header("Location: ../auth/login_admin.html");
  exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Administrador</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <!-- Loader -->
  <div class="loader-overlay" id="loader">
    <div class="spinner"></div>
  </div>

  <div class="page-wrapper">
    <section class="content-container">
      <h1>Bienvenido, <?php echo htmlspecialchars($_SESSION['usuario_nom'], ENT_QUOTES); ?></h1>
      <div class="dashboard-grid">
  <a href="profesores/listar_profesores.php"
     class="dashboard-card primary-card">
    <h2>Gestionar Profesores</h2>
  </a>
  <a href="horarios/listar_horarios.php"
     class="dashboard-card primary-card">
    <h2>Gestionar Horarios</h2>
  </a>
  <a href="gestion_catalogos.php"
     class="dashboard-card primary-card">
    <h2>Gestionar Catálogos</h2>
  </a>
  <a href="../auth/logout.php"
     class="dashboard-card logout-card">
    <h2>Cerrar sesión</h2>
  </a>
</div>

    </section>
  </div>

  <script>
    window.addEventListener('load', () => {
      setTimeout(() => {
        const loader = document.getElementById('loader');
        if (loader) loader.style.display = 'none';
      }, 800);
    });
  </script>
</body>
</html>
