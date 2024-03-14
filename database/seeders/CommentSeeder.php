<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;
class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comment::create([
            'user_id' => '1',
            'text' => 'Хочу висловити подяку сервісному центру за професійну роботу.
             Була поломка холодильника. На заявку відреагували на протязі дня (Олександр).
             Ремонт холодильника здійснював Федорович Андрій - професіонал і майстер своєї справи.
             Порядна людина.  Була поломка компресора і заміну здійснили безкоштовно,
             навіть за виклик не взяв кошти хоча територіально ми знаходимося у Фастівському районі. Дякую Вам.'
        ]);
        Comment::create([
            'user_id' => '2',
            'text' => 'Поломка холодильника викликала в родині шок, на вулиці плюсова температура, сусіди розповідають,
             що ремонт холодильника затягнеться на тижні, якщо поламався мотор-компресор. У той же день 25.05.2021 подзвонив 
             в серісний центр LG, сказали що майстер буде протягом 24 годин. Не вірилося. На другий день після контрольного
             дзвінка, в призначений час, приїхав майстер Саша. Через дві години, після заміни мотора, холодильник заробив.
             Я побачив роботу справжнього професіонала, майстри своєї справи. '
        ]);
    }
}