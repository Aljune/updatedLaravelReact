<?php
namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Resources\Json\JsonResource;

class TestController extends JsonResource
    {
        public function index($request) {
            return [
                'id' => $this->id,
                'name' => $this->name,
                'email' => $this->email,
                'posts' => PostResource::collection($this->posts),
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at,
            ];
        }
       
}