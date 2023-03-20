class Post extends Model
{
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}