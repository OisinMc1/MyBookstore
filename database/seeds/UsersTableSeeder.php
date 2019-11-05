<?php
# @Date:   2019-10-22T17:08:27+01:00
# @Last modified time: 2019-10-23T12:03:49+01:00




use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role_admin = Role::where('name','admin')->first();
      $role_user = Role::where('name','user')->first();

      $admin = new User();
      $admin->name = 'Darryl Sullivan';
      $admin->email = 'admin@mybookstore.ie';
      $admin->password = bcrypt('secret');
      $admin->save();
      $admin->roles()->attach($role_admin);

      $admin = new User();
      $admin->name = 'Oisin McCann';
      $admin->email = 'oisin@mybookstore.ie';
      $admin->password = bcrypt('secret');
      $admin->save();
      $admin->roles()->attach($role_admin);

      $user = new User();
      $user->name = 'Lawrence Sullivan';
      $user->email = 'user@mybookstore.ie';
      $user->password = bcrypt('secret');
      $user->save();
      $user->roles()->attach($role_user);

      $user = new User();
      $user->name = 'The Law';
      $user->email = 'Law@mybookstore.ie';
      $user->password = bcrypt('secret');
      $user->save();
      $user->roles()->attach($role_user);

      $user = new User();
      $user->name = 'This Man';
      $user->email = 'Man@mybookstore.ie';
      $user->password = bcrypt('secret');
      $user->save();
      $user->roles()->attach($role_user);

      $user = new User();
      $user->name = 'Mad Lad';
      $user->email = 'ML@mybookstore.ie';
      $user->password = bcrypt('secret');
      $user->save();
      $user->roles()->attach($role_user);

      $user = new User();
      $user->name = 'Shane Manning';
      $user->email = 'Manning@mybookstore.ie';
      $user->password = bcrypt('secret');
      $user->save();
      $user->roles()->attach($role_user);

    }
}
