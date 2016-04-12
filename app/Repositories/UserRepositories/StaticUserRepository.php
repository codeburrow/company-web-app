<?php namespace Burrow\Repositories\UserRepositories;

use Burrow\Models\User;

/**
 * Static users. Please add your first name (the only required), last name, an url with an avatar of yours, and a website.
 */
class StaticUserRepository implements UserRepository
{

    public function getAll()
    {
        $rawUsers = [
            [
                'fName'   => 'Rizart',
                'lName'   => 'Dokollari',
                'role'    => 'Senior Developer',
                'avatar'  => 'https://avatars3.githubusercontent.com/u/4212119?v=3&s=460',
                'website' => 'https://github.com/rdok'
            ],

            [
                'fName'   => 'Antony',
                'lName'   => 'Kalogeropoulos',
                'role'    => 'CEO',
                'avatar'  => 'https://avatars0.githubusercontent.com/u/9202029?v=3&s=460',
                'website' => 'https://github.com/PadawanTony/'
            ],

            [
                'fName'   => 'George',
                'lName'   => 'Spiridakis',
                'role'    => 'Android Developer',
                'avatar'  => 'https://avatars1.githubusercontent.com/u/16156202?v=3&s=460',
                'website' => 'https://github.com/george-sp'
            ],

	        [
		        'fName'   => 'Nourhan',
		        'lName'   => 'El Shenawi',
		        'role'    => 'Web Developer',
		        'avatar'  => 'img/nourhan.png',
		        'website' => 'https://github.com/NourhanElshenawi'
	        ],

//	        [
//		        'fName'   => 'John',
//		        'lName'   => 'Oikonomidis',
//		        'role'    => 'Junior Developer',
//		        'avatar'  => 'img/john3.png',
//		        'website' => ''
//	        ],

	        [
		        'fName'   => 'Kostas',
		        'lName'   => 'Paidarakis',
		        'role'    => 'Web Developer',
		        'avatar'  => 'https://avatars2.githubusercontent.com/u/9594858?v=3&s=460',
		        'website' => 'https://github.com/KonPed'
	        ],

//            [
//                //  Input your data here similar to above
//                'fName'   => '',
//                'lName'   => '',
//                'avatar'  => '',
//                'website' => ''
//            ],
        ];


        $users = [];

        foreach ($rawUsers as $rawUser) {
            $users[] = new User($rawUser);
        }

        return $users;
    }
}