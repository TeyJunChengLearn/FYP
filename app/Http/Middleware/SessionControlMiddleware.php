<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\PetOwner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class SessionControlMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::user()){
            $userModel=PetOwner::where('id', '=',Auth::id())->first();
            if(!empty($userModel->admin)){
                if(!empty($userModel->admin->forumspecialuser)){
                    $user=[
                        'user'=>Auth::id(),
                        'admin'=>[
                            'status'=>true,
                            'admin_id'=>$userModel->admin->id,
                        ],
                        'animalrescuer'=>[
                            'status'=>false,
                        ],
                        'forumspecialuser'=>[
                            'status'=>true,
                            'forumspecialuser_id'=>$userModel->admin->forumspecialuser->id,
                        ]
                    ];
                }else{
                    $user=[
                        'user'=>Auth::id(),
                        'admin'=>[
                            'status'=>true,
                            'admin_id'=>$userModel->admin->id,
                        ],
                        'animalrescuer'=>[
                            'status'=>false,
                        ],
                        'forumspecialuser'=>[
                            'status'=>false,
                        ]
                    ];
                }
            }else if(!empty($userModel->animalrescuersandshelters)){
                if(!empty($userModel->animalrescuersandshelters->forumspecialuser)){
                    $user=[
                        'user'=>Auth::id(),
                        'admin'=>[
                            'status'=>false,
                        ],
                        'animalrescuer'=>[
                            'status'=>true,
                            'animalrescuer_id'=>$userModel->animalrescuersandshelters->id,

                        ],
                        'forumspecialuser'=>[
                                'status'=>true,
                                'forumspecialuser_id'=>$userModel->animalrescuersandshelters->forumspecialuser->id,
                        ]
                    ];
                }else{
                    $user=[
                        'user'=>Auth::id(),
                        'admin'=>[
                            'status'=>false,
                        ],
                        'animalrescuer'=>[
                            'status'=>true,
                            'animalrescuer_id'=>$userModel->animalrescuersandshelters->id,

                        ],
                        'forumspecialuser'=>[
                            'status'=>false,
                        ]
                    ];
                }

            }else{
                $user=[
                    'user'=>Auth::id(),
                    'admin'=>[
                        'status'=>false,
                    ],
                    'animalrescuer'=>[
                        'status'=>false,
                    ],
                    'forumspecialuser'=>[
                        'status'=>false,
                    ],
                ];
            }
            Session::put('user',$user);
        }

        return $next($request);
    }
}
