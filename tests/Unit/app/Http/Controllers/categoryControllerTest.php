<?php

namespace Tests\Unit\app\Http\Controllers;
namespace Tests\Feature\app\Http\Controllers;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Category;

class categoryControllerTest extends TestCase
{
    use RefreshDatabase;

    protected $category;

    public function setUp() : void
    {
        parent::setUp();

        // chuẩn bị dữ liệu test
        $this->category = [
            'title' => 'thức ăn',
            'icon' => 'Thức ăn',
            'type' => 'outcome',
            'color' => 'red',
            'create_by' => 6
        ];
        // khởi tạo lớp CategoryRepository
        $this->categoryModel = new Category();
    }

    public function testStore()
    {
        // Gọi hàm tạo
        $category = $this->categoryModel->storeCategory($this->category);
        // Kiểm tra xem kết quả trả về có là thể hiện của lớp Category hay không
        $this->assertInstanceOf(Category::class, $category);
        // Kiểm tra data trả về
        $this->assertEquals($this->category['title'], $category->title);
        // Kiểm tra dữ liệu có tồn tại trong cơ sở dữ liệu hay không
        $this->assertDatabaseHas('categories', $this->category);
    }

    public function tearDown() : void
    {
        parent::tearDown();
    }
}