@extends('layouts.main')

    @section('container')
    <h1 class="mb-5">{{ $title }}</h1>
    @foreach ($categories as $category)
    <ul>
        <li>
           <a href="/categories/{{ $category->slug }}"> {{$category->name}} </a>
        </li>
    </ul>
        @endforeach
    @endsection

{{--post
$post::create([
    'title' => 'judul ketiga3',
    'slug' => 'judul-ketiga',
    'excerpt' => 'Lorem ipsum pertama dolor sit amet consecte',
    'body' => '<p>Reiciendis nemo optio maiores aut obcaecati saepe unde earum! Fugiat possimus amet vero voluptate ullam, eveniet quas odit iste recusandae unde providentsaepe distinctio iure laborum placeat at voluptatem deserunt tenetur adipisci.</p><p> Molestias, distinctio dolore. Mollitia deleniti, nemo suscipit eaque voluptatibus omnis laudantium, pariatur eveniet, totam incidunt vel corporis debitis quod perspiciatis asperiores culpa aliquam. Dolore temporibus quam laudantium debitis doloremque cum rerum natus laborum animi? Maxime nihil, aperiam ullam minus, velit expedita consequatur </p><p>impedit beatae, numquam reprehenderit laborumvoluptates itaque dolore nemo aspernatur molestias voluptas. Quo ipsa dolores, omnis voluptatumneque delectus id molestiae expedita quaerat perferendis maiores, debitis optio sapiente sint illum enim quis vel laboriosam tenetur harum quia ex nihil eius. Sit sequi aperiam nemo enim necessitatibus laborum laudantium?</p>'
]) --}}
