<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Портал СГСН</title>
</head>
<body><header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded ">
        <a class="navbar-brand" href="/">Портал Службы</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample09">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Подать заявку</a>
            </li>            
            <li class="nav-item">
              <a class="nav-link" href="#">Журнал учёта ошибок</a>
            </li>            
            <li class="nav-item">
              <a class="nav-link" href="#">Журнал командировок</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Голосование</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="/news" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Новости</a>
              <div class="dropdown-menu" aria-labelledby="dropdown09">
                <a class="dropdown-item" href="/news/create">Создать Новость</a>
                </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Реестры</a>
              <div class="dropdown-menu" aria-labelledby="dropdown09">
                <a class="dropdown-item" href="#">Разрешения</a>
                <a class="dropdown-item" href="#">Проверки</a>
              </div>
            </li>            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Помощь</a>
              <div class="dropdown-menu" aria-labelledby="dropdown09">
                <a class="dropdown-item" href="#">Инструкции по работе с порталом</a>
                <a class="dropdown-item" href="#">Работа в ЕИС Стройформ</a>
              </div>
            </li>
          </ul>
          <form class="form-inline my-2 my-md-0">
            <input class="form-control" type="text" placeholder="Поиск по сайту" aria-label="Search">
          </form>
        </div>
      </nav>
      </header>

      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Главная новость</h1>
          <p>Короткий текст главной новости</p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Подробнее »</a></p>
        </div>
      </div>

      @yield('content')
</body>
</html>