<?php
$title = 'ダッシュボード';
?>
@extends('tunes.layouts.base')

@section('content')
    <div id="dashboard-content" class="card">
        <div class="card-header">
            ダッシュボード
        </div>
        <div class="card-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm">
                        <h6>担当しているチケット</h6>
                        <table class="list issues">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>プロジェクト</th>
                                <th>トラッカー</th>
                                <th>題名</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr id="issue-45"
                                class="hascontextmenu odd issue tracker-4 status-7 priority-2 priority-default parent created-by-me assigned-to-me">
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
                            <tr id="issue-46"
                                class="hascontextmenu even issue tracker-4 status-7 priority-2 priority-default parent created-by-me assigned-to-me">
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
                            <tr id="issue-110"
                                class="hascontextmenu odd issue tracker-5 status-7 priority-2 priority-default child created-by-me assigned-to-me">
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
                            <tr id="issue-109"
                                class="hascontextmenu even issue tracker-5 status-7 priority-2 priority-default child created-by-me assigned-to-me">
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
                            <tr id="issue-108"
                                class="hascontextmenu odd issue tracker-5 status-7 priority-2 priority-default child created-by-me assigned-to-me">
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
                            <tr id="issue-107"
                                class="hascontextmenu even issue tracker-5 status-7 priority-2 priority-default child created-by-me assigned-to-me">
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
                            <tr id="issue-106"
                                class="hascontextmenu odd issue tracker-5 status-7 priority-2 priority-default child created-by-me assigned-to-me">
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
                            <tr id="issue-105"
                                class="hascontextmenu even issue tracker-5 status-7 priority-2 priority-default child created-by-me assigned-to-me">
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
                            <tr id="issue-104"
                                class="hascontextmenu odd issue tracker-5 status-7 priority-2 priority-default child created-by-me assigned-to-me">
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
                            <tr id="issue-103"
                                class="hascontextmenu even issue tracker-5 status-7 priority-2 priority-default child created-by-me assigned-to-me">
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
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>プロジェクト</th>
                                <th>トラッカー</th>
                                <th>題名</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr id="issue-45"
                                class="hascontextmenu odd issue tracker-4 status-7 priority-2 priority-default parent created-by-me assigned-to-me">
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
                            <tr id="issue-46"
                                class="hascontextmenu even issue tracker-4 status-7 priority-2 priority-default parent created-by-me assigned-to-me">
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
                            <tr id="issue-110"
                                class="hascontextmenu odd issue tracker-5 status-7 priority-2 priority-default child created-by-me assigned-to-me">
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
                            <tr id="issue-109"
                                class="hascontextmenu even issue tracker-5 status-7 priority-2 priority-default child created-by-me assigned-to-me">
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
                            <tr id="issue-108"
                                class="hascontextmenu odd issue tracker-5 status-7 priority-2 priority-default child created-by-me assigned-to-me">
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
                            <tr id="issue-107"
                                class="hascontextmenu even issue tracker-5 status-7 priority-2 priority-default child created-by-me assigned-to-me">
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
                            <tr id="issue-106"
                                class="hascontextmenu odd issue tracker-5 status-7 priority-2 priority-default child created-by-me assigned-to-me">
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
                            <tr id="issue-105"
                                class="hascontextmenu even issue tracker-5 status-7 priority-2 priority-default child created-by-me assigned-to-me">
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
                            <tr id="issue-104"
                                class="hascontextmenu odd issue tracker-5 status-7 priority-2 priority-default child created-by-me assigned-to-me">
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
                            <tr id="issue-103"
                                class="hascontextmenu even issue tracker-5 status-7 priority-2 priority-default child created-by-me assigned-to-me">
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
    {{ Form::open(['route' => 'logout', 'name' => 'logout']) }}
    {{ Form::close() }}
@endsection
