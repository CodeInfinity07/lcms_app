<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = [
            'Ahmed Khan', 'Hamza Ali', 'Abdullah Hassan', 'Muhammad Usman', 'Bilal Farooq',
            'Fahad Javed', 'Imran Riaz', 'Zaid Ahmed', 'Haris Khalid', 'Owais Malik',
            'Salman Rafiq', 'Daniyal Zafar', 'Arham Saeed', 'Ahsan Tariq', 'Taimoor Arif',
            'Zeeshan Shafiq', 'Adil Kamran', 'Mustafa Qadir', 'Shahid Nadeem', 'Zubair Noor',
            'Yasir Mahmood', 'Asad Qureshi', 'Waleed Rahman', 'Ehsan Gul', 'Noman Sheikh',
            'Rameez Akhtar', 'Rizwan Anwar', 'Moazzam Faheem', 'Kashif Baig', 'Umair Shabbir',
            'Saqib Raza', 'Adeel Nawaz', 'Sohail Iqbal', 'Ali Haider', 'Faizan Latif',
            'Junaid Abbas', 'Rehan Saeed', 'Muneeb Ahsan', 'Arslan Riaz', 'Zain Mustafa',
            'Shahroz Raza', 'Kamran Anwar', 'Irfan Malik', 'Wasim Abbas', 'Mazhar Qamar',
            'Sarmad Latif', 'Umar Farooq', 'Yaseen Shafi', 'Khalid Naveed', 'Danish Aslam',
            'Taha Javed', 'Sameer Malik', 'Usama Tariq', 'Haider Riaz', 'Hammad Farooq',
            'Arsalan Mahmood', 'Moiz Hashmi', 'Nabeel Akhtar', 'Jawad Ahmed', 'Saeed Hassan',
            'Raheel Asghar', 'Iftikhar Khan', 'Anees Qadir', 'Mansoor Raza', 'Shahzaib Tariq',
            'Tahir Ali', 'Mubashir Riaz', 'Naveed Qureshi', 'Shehryar Abbas', 'Imtiaz Latif',
            'Jibran Shahid', 'Omer Saeed', 'Sufyan Ahmed', 'Basit Arif', 'Azhar Noor',
            'Khalil Hassan', 'Saif Malik', 'Waqas Javed', 'Shayan Mustafa', 'Tauseef Abbas',
            'Akram Khan', 'Fawad Raza', 'Mazin Rahman', 'Sarfaraz Qamar', 'Kashan Tariq',
            'Rehman Sheikh', 'Kamal Hassan', 'Zohair Baig', 'Anas Shahid', 'Shahmeer Khalid',
            'Rizwan Haider', 'Zubair Ahmed', 'Ibrahim Hassan', 'Aamir Qadir', 'Faheem Abbas',
            'Hashim Malik', 'Jibril Aslam', 'Mehroz Farooq', 'Abrar Latif', 'Sohail Qadir'
        ];

        $numbers = [
            '03218484862', '03028437343', '03134651214', '03011234567', '03219980099',
            '03008437343', '03245060350', '03333031790', '03026111111', '03224009766',
            '03004123965', '03334839399', '03218408132', '03017522225', '03212275557',
            '03318403890', '03018403890', '03337891572', '03214143441', '03004408918',
            '03334408918', '03704869880', '03116042629', '03082224324', '03218422322',
            '03228515215', '03218451629', '03066010466', '03057094011', '03414184644',
            '03009434803', '03018442777', '03154301910', '03218440701', '03084121206',
            '03145047379', '03224009766', '03222444777', '03336992300', '03224800369',
            '03155004922', '03325005216', '03335172786', '03009454513', '03259251379',
            '03059251379', '03074101813', '03004821890', '03133500444', '03008540701',
            '03008501140', '03006000302', '03242233553', '03454001167', '03338954321',
            '03218494190', '03454034521', '03008437343', '03278437343', '03004254449',
            '03074649863', '03456466182', '03078435657', '03336349998', '03074012620',
            '03084444128', '03214012620', '03324682641', '03224130662', '03037575405',
            '03458497789', '03224285613', '03224880088', '03334269304', '03338869700',
            '03008498741', '03228897739', '03004232455', '03034234227', '03338272249',
            '03334312699', '03004012620', '03084444128', '03036430495', '03005237225',
            '03323657048', '03214473508', '03334248106', '03218413230', '03275014373',
            '03098496840', '03005394360', '03224231707', '03454194590', '03218475669'
        ];

        $users = [];

        for ($i = 0; $i < 100; $i++) {
            $name = $names[array_rand($names)];
            $number = $numbers[array_rand($numbers)];

            // Split name into parts
            $nameParts = explode(' ', $name);
            $firstName = strtolower($nameParts[0]);
            $lastName = strtolower($nameParts[1]);

            // Random separator for email
            $separators = ['.'];
            $separator = $separators[array_rand($separators)];

            // Generate email
            $email = $firstName . $separator . $lastName . rand(1, 99) . '@lt.com';

            $users[] = [
                'name' => $name,
                'email' => $email,
                'email_verified_at' => null,
                'password' => Hash::make($name . '_123'),
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'role_id' => 3,
                'whatsapp_number' => $number,
                'club_id' => rand(1, 100),
            ];
        }

        DB::table('users')->insert($users);
    }
}
