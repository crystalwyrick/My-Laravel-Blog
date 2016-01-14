<?php

class PostTableSeeder extends Seeder {
	

	// do not assume user_id is '1'...need to assign an actual id of a user in the db
	public function run() {

$user = User::firstOrFail();

		$post1 = new Post;	
		$post1->title = 'First post';
		$post1->subtitle = 'This is a subtitle';
		$post1->content  = 'It is super easy to create a new post.';
		$post1->image = 'This is an image';
		$post1->user_id = $user->id;
		$post1->save();

		$post2 = new Post;	
		$post2->title = 'Second post';
		$post2->subtitle = 'This is a subtitle';
		$post2->content  = 'It is super easy to create a new post.';
		$post2->image = 'This is an image';
		$post2->user_id = $user->id;
		$post2->save();

		$post3 = new Post;	
		$post3->title = 'Third post';
		$post3->subtitle = 'This is a subtitle';
		$post3->content  = 'It is super easy to create a new post.';
		$post3->image = 'This is an image';
		$post3->user_id = $user->id;
		$post3->save();

		$post4 = new Post;	
		$post4->title = 'Fourth post';
		$post4->subtitle = 'This is a subtitle';
		$post4->content  = 'It is super easy to create a new post.';
		$post4->image = 'This is an image';
		$post4->user_id = $user->id;
		$post4->save();
	}
}