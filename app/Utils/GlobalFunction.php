<?php


function currentRouteIs(string $route): bool{
    return request()->route()->getName() === $route;
}

function currentRouteContains(\Illuminate\Support\Collection $routes): bool{
    return $routes->contains(request()->route()->getName());
}
