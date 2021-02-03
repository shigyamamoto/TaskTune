<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard|TaskTune</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid:wght@100;300;400;900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('lib/fontawesome-free-5.15.2-web/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/fontawesome-free-5.15.2-web/css/brands.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/fontawesome-free-5.15.2-web/css/solid.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        header {
            font-family: 'Londrina Solid', cursive;
        }
    </style>
</head>
<body>
    <header class="navbar navbar-expand-md navbar-dark bd-navbar">
        <nav class="container-xxl flex-wrap flex-md-nowrap" aria-label="Main navigation">
            <a class="navbar-brand p-0 me-2" href="/">
                <img id="header-logo" src="{{ asset('img/logo@2x.png') }}">
                <span>
                    TaskTune
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="bi" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"></path>
                </svg>

            </button>

            <div class="collapse navbar-collapse" id="bdNavbar">
                <ul class="navbar-nav flex-row flex-wrap bd-navbar-nav pt-2 py-md-0">
                    <li class="nav-item col-6 col-md-auto">
                        <a class="nav-link p-2">ダッシュボード</a>
                    </li>
                    <li class="nav-item col-6 col-md-auto">
                        <a class="nav-link p-2">プロジェクト</a>
                    </li>
                    <li class="nav-item col-6 col-md-auto">
                        <a class="nav-link p-2">管理</a>
                    </li>
                </ul>

                <hr class="d-md-none text-white-50">

                <ul class="navbar-nav flex-row flex-wrap ms-md-auto">
                    <li class="nav-item col-6 col-md-auto">
                        <a class="nav-link p-2" href="#" rel="noopener">
                            <i class="fas fa-dove"></i> shigeki.yamamoto
                        </a>
                    </li>
                    <li class="nav-item col-6 col-md-auto">
                        <a class="nav-link p-2" href="#" rel="noopener">
                            個人設定
                        </a>
                    </li>
                    <li class="nav-item col-6 col-md-auto">
                        <a class="nav-link p-2" href="javascript:logout.submit()" rel="noopener">
                            ログアウト
                        </a>
                    </li>

                </ul>
            </div>
        </nav>
    </header>
<div class="container-fluid">
    <hr>
    <div class="card">
        <div class="card-header" style="font-weight:600;">
            ダッシュボード
        </div>
        <div class="card-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm">
                        <h6>担当しているチケット</h6>
                        <table class="list issues">
                            <thead><tr>
                                <th>#</th>
                                <th>プロジェクト</th>
                                <th>トラッカー</th>
                                <th>題名</th>
                            </tr></thead>
                            <tbody>
                            <tr id="issue-45" class="hascontextmenu odd issue tracker-4 status-7 priority-2 priority-default parent created-by-me assigned-to-me">
                                <td class="id">
                                    <input type="checkbox" name="ids[]" value="45" style="display:none;">
                                    <a href="/issues/45">45</a>
                                </td>
                                <td class="project"><a href="/projects/egg-se">EGG SE</a></td>
                                <td class="tracker">Story</td>
                                <td class="subject">
                                    <a href="/issues/45">勤怠</a> (To Do)
                                </td>
                            </tr>
                            <tr id="issue-46" class="hascontextmenu even issue tracker-4 status-7 priority-2 priority-default parent created-by-me assigned-to-me">
                                <td class="id">
                                    <input type="checkbox" name="ids[]" value="46" style="display:none;">
                                    <a href="/issues/46">46</a>
                                </td>
                                <td class="project"><a href="/projects/egg-se">EGG SE</a></td>
                                <td class="tracker">Story</td>
                                <td class="subject">
                                    <a href="/issues/46">振り返りMTG</a> (To Do)
                                </td>
                            </tr>
                            <tr id="issue-110" class="hascontextmenu odd issue tracker-5 status-7 priority-2 priority-default child created-by-me assigned-to-me">
                                <td class="id">
                                    <input type="checkbox" name="ids[]" value="110" style="display:none;">
                                    <a href="/issues/110">110</a>
                                </td>
                                <td class="project"><a href="/projects/prj">確認用テストプロジェクト</a></td>
                                <td class="tracker">Task</td>
                                <td class="subject">
                                    <a href="/issues/110">実施</a> (To Do)
                                </td>
                            </tr>
                            <tr id="issue-109" class="hascontextmenu even issue tracker-5 status-7 priority-2 priority-default child created-by-me assigned-to-me">
                                <td class="id">
                                    <input type="checkbox" name="ids[]" value="109" style="display:none;">
                                    <a href="/issues/109">109</a>
                                </td>
                                <td class="project"><a href="/projects/prj">確認用テストプロジェクト</a></td>
                                <td class="tracker">Task</td>
                                <td class="subject">
                                    <a href="/issues/109">調査</a> (To Do)
                                </td>
                            </tr>
                            <tr id="issue-108" class="hascontextmenu odd issue tracker-5 status-7 priority-2 priority-default child created-by-me assigned-to-me">
                                <td class="id">
                                    <input type="checkbox" name="ids[]" value="108" style="display:none;">
                                    <a href="/issues/108">108</a>
                                </td>
                                <td class="project"><a href="/projects/prj">確認用テストプロジェクト</a></td>
                                <td class="tracker">Task</td>
                                <td class="subject">
                                    <a href="/issues/108">開発</a> (To Do)
                                </td>
                            </tr>
                            <tr id="issue-107" class="hascontextmenu even issue tracker-5 status-7 priority-2 priority-default child created-by-me assigned-to-me">
                                <td class="id">
                                    <input type="checkbox" name="ids[]" value="107" style="display:none;">
                                    <a href="/issues/107">107</a>
                                </td>
                                <td class="project"><a href="/projects/prj">確認用テストプロジェクト</a></td>
                                <td class="tracker">Task</td>
                                <td class="subject">
                                    <a href="/issues/107">設計</a> (To Do)
                                </td>
                            </tr>
                            <tr id="issue-106" class="hascontextmenu odd issue tracker-5 status-7 priority-2 priority-default child created-by-me assigned-to-me">
                                <td class="id">
                                    <input type="checkbox" name="ids[]" value="106" style="display:none;">
                                    <a href="/issues/106">106</a>
                                </td>
                                <td class="project"><a href="/projects/prj">確認用テストプロジェクト</a></td>
                                <td class="tracker">Task</td>
                                <td class="subject">
                                    <a href="/issues/106">作業</a> (To Do)
                                </td>
                            </tr>
                            <tr id="issue-105" class="hascontextmenu even issue tracker-5 status-7 priority-2 priority-default child created-by-me assigned-to-me">
                                <td class="id">
                                    <input type="checkbox" name="ids[]" value="105" style="display:none;">
                                    <a href="/issues/105">105</a>
                                </td>
                                <td class="project"><a href="/projects/prj">確認用テストプロジェクト</a></td>
                                <td class="tracker">Task</td>
                                <td class="subject">
                                    <a href="/issues/105">作業</a> (To Do)
                                </td>
                            </tr>
                            <tr id="issue-104" class="hascontextmenu odd issue tracker-5 status-7 priority-2 priority-default child created-by-me assigned-to-me">
                                <td class="id">
                                    <input type="checkbox" name="ids[]" value="104" style="display:none;">
                                    <a href="/issues/104">104</a>
                                </td>
                                <td class="project"><a href="/projects/prj">確認用テストプロジェクト</a></td>
                                <td class="tracker">Task</td>
                                <td class="subject">
                                    <a href="/issues/104">開発</a> (To Do)
                                </td>
                            </tr>
                            <tr id="issue-103" class="hascontextmenu even issue tracker-5 status-7 priority-2 priority-default child created-by-me assigned-to-me">
                                <td class="id">
                                    <input type="checkbox" name="ids[]" value="103" style="display:none;">
                                    <a href="/issues/103">103</a>
                                </td>
                                <td class="project"><a href="/projects/prj">確認用テストプロジェクト</a></td>
                                <td class="tracker">Task</td>
                                <td class="subject">
                                    <a href="/issues/103">設計</a> (To Do)
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm">
                        <h6>担当しているチケット</h6>
                        <table class="list issues">
                            <thead><tr>
                                <th>#</th>
                                <th>プロジェクト</th>
                                <th>トラッカー</th>
                                <th>題名</th>
                            </tr></thead>
                            <tbody>
                            <tr id="issue-45" class="hascontextmenu odd issue tracker-4 status-7 priority-2 priority-default parent created-by-me assigned-to-me">
                                <td class="id">
                                    <input type="checkbox" name="ids[]" value="45" style="display:none;">
                                    <a href="/issues/45">45</a>
                                </td>
                                <td class="project"><a href="/projects/egg-se">EGG SE</a></td>
                                <td class="tracker">Story</td>
                                <td class="subject">
                                    <a href="/issues/45">勤怠</a> (To Do)
                                </td>
                            </tr>
                            <tr id="issue-46" class="hascontextmenu even issue tracker-4 status-7 priority-2 priority-default parent created-by-me assigned-to-me">
                                <td class="id">
                                    <input type="checkbox" name="ids[]" value="46" style="display:none;">
                                    <a href="/issues/46">46</a>
                                </td>
                                <td class="project"><a href="/projects/egg-se">EGG SE</a></td>
                                <td class="tracker">Story</td>
                                <td class="subject">
                                    <a href="/issues/46">振り返りMTG</a> (To Do)
                                </td>
                            </tr>
                            <tr id="issue-110" class="hascontextmenu odd issue tracker-5 status-7 priority-2 priority-default child created-by-me assigned-to-me">
                                <td class="id">
                                    <input type="checkbox" name="ids[]" value="110" style="display:none;">
                                    <a href="/issues/110">110</a>
                                </td>
                                <td class="project"><a href="/projects/prj">確認用テストプロジェクト</a></td>
                                <td class="tracker">Task</td>
                                <td class="subject">
                                    <a href="/issues/110">実施</a> (To Do)
                                </td>
                            </tr>
                            <tr id="issue-109" class="hascontextmenu even issue tracker-5 status-7 priority-2 priority-default child created-by-me assigned-to-me">
                                <td class="id">
                                    <input type="checkbox" name="ids[]" value="109" style="display:none;">
                                    <a href="/issues/109">109</a>
                                </td>
                                <td class="project"><a href="/projects/prj">確認用テストプロジェクト</a></td>
                                <td class="tracker">Task</td>
                                <td class="subject">
                                    <a href="/issues/109">調査</a> (To Do)
                                </td>
                            </tr>
                            <tr id="issue-108" class="hascontextmenu odd issue tracker-5 status-7 priority-2 priority-default child created-by-me assigned-to-me">
                                <td class="id">
                                    <input type="checkbox" name="ids[]" value="108" style="display:none;">
                                    <a href="/issues/108">108</a>
                                </td>
                                <td class="project"><a href="/projects/prj">確認用テストプロジェクト</a></td>
                                <td class="tracker">Task</td>
                                <td class="subject">
                                    <a href="/issues/108">開発</a> (To Do)
                                </td>
                            </tr>
                            <tr id="issue-107" class="hascontextmenu even issue tracker-5 status-7 priority-2 priority-default child created-by-me assigned-to-me">
                                <td class="id">
                                    <input type="checkbox" name="ids[]" value="107" style="display:none;">
                                    <a href="/issues/107">107</a>
                                </td>
                                <td class="project"><a href="/projects/prj">確認用テストプロジェクト</a></td>
                                <td class="tracker">Task</td>
                                <td class="subject">
                                    <a href="/issues/107">設計</a> (To Do)
                                </td>
                            </tr>
                            <tr id="issue-106" class="hascontextmenu odd issue tracker-5 status-7 priority-2 priority-default child created-by-me assigned-to-me">
                                <td class="id">
                                    <input type="checkbox" name="ids[]" value="106" style="display:none;">
                                    <a href="/issues/106">106</a>
                                </td>
                                <td class="project"><a href="/projects/prj">確認用テストプロジェクト</a></td>
                                <td class="tracker">Task</td>
                                <td class="subject">
                                    <a href="/issues/106">作業</a> (To Do)
                                </td>
                            </tr>
                            <tr id="issue-105" class="hascontextmenu even issue tracker-5 status-7 priority-2 priority-default child created-by-me assigned-to-me">
                                <td class="id">
                                    <input type="checkbox" name="ids[]" value="105" style="display:none;">
                                    <a href="/issues/105">105</a>
                                </td>
                                <td class="project"><a href="/projects/prj">確認用テストプロジェクト</a></td>
                                <td class="tracker">Task</td>
                                <td class="subject">
                                    <a href="/issues/105">作業</a> (To Do)
                                </td>
                            </tr>
                            <tr id="issue-104" class="hascontextmenu odd issue tracker-5 status-7 priority-2 priority-default child created-by-me assigned-to-me">
                                <td class="id">
                                    <input type="checkbox" name="ids[]" value="104" style="display:none;">
                                    <a href="/issues/104">104</a>
                                </td>
                                <td class="project"><a href="/projects/prj">確認用テストプロジェクト</a></td>
                                <td class="tracker">Task</td>
                                <td class="subject">
                                    <a href="/issues/104">開発</a> (To Do)
                                </td>
                            </tr>
                            <tr id="issue-103" class="hascontextmenu even issue tracker-5 status-7 priority-2 priority-default child created-by-me assigned-to-me">
                                <td class="id">
                                    <input type="checkbox" name="ids[]" value="103" style="display:none;">
                                    <a href="/issues/103">103</a>
                                </td>
                                <td class="project"><a href="/projects/prj">確認用テストプロジェクト</a></td>
                                <td class="tracker">Task</td>
                                <td class="subject">
                                    <a href="/issues/103">設計</a> (To Do)
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{ Form::open(['route' => 'logout', 'name' => 'logout']) }}

{{ Form::close() }}
</body>
</html>
