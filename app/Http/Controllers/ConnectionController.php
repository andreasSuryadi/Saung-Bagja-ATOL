<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\News;
use App\Models\Page;
use App\Models\PageSection;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ConnectionController extends Controller
{
    private function getDetail($pages, $section, $typeImage)
    {
        $page = Page::where('title', $pages)->first();
        if (!$page) {
            $page = null;
        }

        $pageSection = null;
        if ($page != null) {
            $pageSection = PageSection::where('page_id', $page->id)->where('section', $section)->first();

            if ($pageSection && !is_null($typeImage)) {
                $pageSection->getMedia($typeImage);
            }
        }

        return $pageSection;
    }

    public function home()
    {
        $banner = $this->getDetail('home', 'banner', 'banner');
        $banner_pages = [
            'title' => $banner->title ?? "Saung Bagja",
            'subtitle' => $banner->subtitle ?? "Tempat makanan terenak",
            'button' => $banner->button ?? "Jelajahi makanan kami",
            'banner' => $banner && $banner->media ? $banner->media[0]->getUrl() : null,
        ];

        $about_us = $this->getDetail('home', 'about-us', 'gallery');
        $about_us_description = "
            <h3>You're going to fall in love with nature</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur libero repellat quis consequatur
                ducimus quam nisi exercitationem omnis earum qui.
            </p>

            <h3>Live adventures like you never have before</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores nulla deserunt voluptatum nam.
            </p>
        ";
        $about_us_pages = [
            'title' => $about_us->title ?? "Tentang Kami",
            'description' => $about_us->description ?? $about_us_description,
            'button' => $about_us->button ?? "Selengkapnya",
            'image1' => $about_us && count($about_us->media) > 0 ? $about_us->media[0]->getUrl() : null,
            'image2' => $about_us && count($about_us->media) ? $about_us->media[1]->getUrl() : null,
            'image3' => $about_us && count($about_us->media) ? $about_us->media[2]->getUrl() : null
        ];

        $menu = $this->getDetail('home', 'menu', null);
        $menu_pages = [
            'title' => $menu->title ?? "Daftar Menu",
            'button' => $menu->button ?? "Selengkapnya"
        ];
        
        return view('pages.menu.home', [
            'banner' => $banner_pages,
            'about_us' => $about_us_pages,
            'menu' => $menu_pages,
        ]);
    }

    public function aboutUs()
    {
        $banner = $this->getDetail('about-us', 'banner', 'banner');
        $banner_pages = [
            'title' => $banner->title ?? "Tentang Kami",
            'subtitle' => $banner->subtitle ?? "Sekilas Tentang Kami",
            'banner' => $banner && $banner->media ? $banner->media[0]->getUrl() : null,
        ];

        $section1 = $this->getDetail('about-us', 'section1', 'gallery');
        $section1_description = "
            <h3>You're going to fall in love with nature</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur libero repellat quis consequatur
                ducimus quam nisi exercitationem omnis earum qui.
            </p>

            <h3>Live adventures like you never have before</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores nulla deserunt voluptatum nam.
            </p>
        ";
        $section1_pages = [
            'title' => $section1->title ?? "Tentang Kami",
            'description' => $section1->description ?? $section1_description,
            'image1' => $section1 && count($section1->media) > 0 ? $section1->media[0]->getUrl() : null,
            'image2' => $section1 && count($section1->media) > 0 ? $section1->media[1]->getUrl() : null,
            'image3' => $section1 && count($section1->media) > 0 ? $section1->media[2]->getUrl() : null
        ];

        $section2 = $this->getDetail('about-us', 'section2', null);
        $section2_description = "
            <h3>You're going to fall in love with nature</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur libero repellat quis consequatur
                ducimus quam nisi exercitationem omnis earum qui.
            </p>

            <h3>Live adventures like you never have before</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores nulla deserunt voluptatum nam.
            </p>
        ";
        $section2_pages = [
            'title' => $section2->title ?? "Tentang Kami",
            'description' => $section2->description ?? $section2_description,
        ];

        return view('pages.menu.about-us', [
            'banner' => $banner_pages,
            'section1' => $section1_pages,
            'section2' => $section2_pages,
        ]);
    }

    public function news()
    {
        $banner = $this->getDetail('news', 'banner', 'banner');
        $banner_pages = [
            'title' => $banner->title ?? "Tentang Kami",
            'subtitle' => $banner->subtitle ?? "Sekilas Tentang Kami",
            'banner' => $banner && $banner->media ? $banner->media[0]->getUrl() : null,
        ];

        $news_data = News::whereDate('published_at', '<=', Carbon::now())->orderBy('published_at', 'desc')->get();

        return view('pages.menu.news', [
            'banner' => $banner_pages,
            'news_data' => $news_data
        ]);
    }

    public function menu()
    {
        $banner = $this->getDetail('news', 'banner', 'banner');
        $banner_pages = [
            'title' => $banner->title ?? "Tentang Kami",
            'subtitle' => $banner->subtitle ?? "Sekilas Tentang Kami",
            'banner' => $banner && $banner->media ? $banner->media[0]->getUrl() : null,
        ];

        $menu_data = Menu::orderBy('created_at', 'desc')->get();

        return view('pages.menu.menu', [
            'banner' => $banner_pages,
            'menu_data' => $menu_data
        ]);
    }
}
