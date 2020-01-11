1) first create the model
    =>php aetisan make:model Article
2) add the fillable column
3)make a seeder
    => php artisan make:seeder ArticlesTableSeeder
    write code
4) execute the seeder
    =>php artisan db:seed --class ArticleTableSeeder
