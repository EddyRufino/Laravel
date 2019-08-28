<?php

function routeActive($nameRoute) {

  return request()->routeIs($nameRoute) ? 'active' : '';
}
