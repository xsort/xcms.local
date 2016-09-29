<aside id="sidebar"  ng-controller="sidenavCtrl" ng-class="{'open': isActive}" layout="column" layout-align="stretch" ng-cloak>    <div class="sideToggle hidden-xs" ng-mouseover="activeButton()">             <div class="sideUpBtn "></div>            <div class="sideCenterBtn"> </div>    </div>    <md-content>               <md-button ng-click="activeButton()" class="md-icon-button sideBtnCancel md-raised visible-xs" aria-label="More">                    <md-icon md-svg-icon="images/icons/menu-side.svg"></md-icon>                </md-button>       <!--  <section class="auth" layout="row"  layout-align="center center" flex>            <md-button md-ink-ripple="false" >                <md-icon md-svg-icon="images/icons/enter.svg"></md-icon>                Войти в аккаунт            </md-button>        </section> -->                       <section class="mainMenu visible-xs" >        <a name="menu"></a>            <span>Разделы портала:</span>            <ul layout="column" layout-align="stretch">                            <li class="green" >                                <md-button class="md-raised " ng-href="/news" >{{ trans('common.m-news') }}</md-button>                            </li>                            <li class="red">                                <md-button class="md-raised" ng-href="/reports" >{{ trans('common.m-reports') }}</md-button>                            </li>                            <li class="yellow">                               <md-button class="md-raised" ng-href="/promo" >{{ trans('common.m-promo') }}</md-button>                            </li>                            <li class="brown">                              <md-button class="md-raised" ng-href="exclusive" >{{ trans('common.m-exclusiv') }}</md-button>                            </li>                            <li class="blue">                                <md-button class="md-raised" ng-href="/about" >{{ trans('common.m-about') }}</md-button>                            </li>            </ul>        </section>        <section class="category">            <span>{{ trans('common.watch-also') }}:</span>            <ul layout="column" layout-align="stretch">                @foreach ($categoriesList->slice(0, 10) as $category)                    <li layout="row"  layout-align="center center">                        <div flex="25" layout-align="center">                            <img  src="uploaded/{{isset($category->photos{0}) ? $category->photos{0}->source : 'nophoto.png'}}" alt="{{$category->name}}">                        </div>                        <a flex="75" href="{{$category->slug}}">{{$category->name}}</a>                    </li>                @endforeach            </ul>            <md-button ng-href="/categories" class="md-raised"> {{ trans('common.all-categories') }} </md-button>        </section>        <section class="mailer hidden-xs">                <span>{{ trans('common.f-mailer-title') }}</span>                <form name="projectForm">                    <md-input-container md-no-float class="md-block">                        <input required type="email" name="clientEmail" ng-model="project.clientEmail"                               minlength="10" maxlength="100" ng-pattern="/^.+@.+\..+$/" placeholder="Введите email" />                        <div ng-messages="projectForm.clientEmail.$error" role="alert">                          <div ng-message-exp="['required', 'minlength', 'maxlength', 'pattern']">                            Ваш email должен быть между 5 и 50 символов и должен быть похож на e-mail адрес.                          </div>                        </div>                    </md-input-container>                    <md-button type="submit" class="md-raised md-warn md-block redButton">{{ trans('common.f-subscribe') }}</md-button>                </form>        </section>        <section class="subscribe hidden-xs">            <div class="fb-page" data-href="https://www.facebook.com/allevents.md" data-tabs="event" data-width="260" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">                <div class="fb-xfbml-parse-ignore">                    <blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/allevents.md">Allevents.md</a></blockquote>                </div>            </div>        </section>        <section class="lastNews hidden-xs">            <span class="sidebar-news-title">{{ trans('common.m-news') }} :</span>            <ul layout="column" layout-align="stretch">                @foreach ($newsList->slice(0, 4) as $key=>$news)                <li layout="column"  layout-align="stretch">                    <a href="/news/{{$news->slug}}" class="news-title"> {{$key+1}}. {{ str_limit($news->name, $limit = 50, $end = '...') }} </a>                    <img src="uploaded/{{isset($news->photos{0}) ? $news->photos{0}->source : 'nophoto.png'}}" alt="">                    <span>{{ str_limit($news->description_short, $limit = 200, $end = '...') }}</span>                    <div>                        <a class="readMore" href="/news/{{$news->slug}}"> {{ trans('common.read-more') }} >></a>                    </div>                </li>                @endforeach            </ul>                    </section>    </md-content></aside>