@extends('layouts.app')

    @section('content')
    <div class="py-12">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                
                    {{ __("Bonjour dans notre planet. You're logged in! Silakan cari data placard ... ") }}
                </div>

                <div class="row">
                    <ul class="navbar-nav navbar-nav-left">
                      <li class="nav-item nav-search d-none d-lg-block ms-3">
                        <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text" id="search">
                                <i class="mdi mdi-magnify"></i>
                              </span>
                          </div>
                          <input type="text" class="form-control" placeholder="search" aria-label="search" aria-describedby="search">
                        </div>
                      </li>	
                    </ul>
                  </div>
    </div>
    @endsection
