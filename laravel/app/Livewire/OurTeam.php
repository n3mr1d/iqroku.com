<?php

namespace App\Livewire;

use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class OurTeam extends Component
{
    use WithoutUrlPagination, WithPagination;

    // Number of items per page
    public $perPage = 8;

    public bool $isFirstLoad = true;

    public function updatedPage()
    {
        $this->isFirstLoad = false;
    }

    /**
     * Get team members data
     * In production, this could come from a database or API
     */
    private function getTeamMembers(): array
    {

        return [
            [
                'index' => 1,
                'nama' => 'Gabriel F. Harris',
                'posisi' => 'TPA Director',
                'foto' => 'Gabriel.jpg',
            ],
            [

                'index' => 2,
                'nama' => 'Rifqi M. Firdaus',
                'posisi' => 'TPA Secretary',
                'foto' => 'Rifqi.jpg',
            ],
            [
                'index' => 3,
                'nama' => 'Fauzan Nur A.',
                'posisi' => 'TPA Treasurer',
                'foto' => 'Fauzan.jpg',
            ],
            [
                'index' => 4,
                'nama' => 'Muhammad Dhia Althaf Permadi',
                'posisi' => 'TPA Media Team',
                'foto' => 'Dhia.jpg',

            ],
            [
                'index' => 5,
                'nama' => 'Maria Ulfa',
                'posisi' => 'Group 1 Teacher',
                'foto' => 'unknown.avif',

            ],
            [
                'index' => 6,
                'nama' => 'Fina Annisa',
                'posisi' => 'Group 2 Teacher',
                'foto' => 'Fina.jpg',

            ],
            [
                'index' => 7,
                'nama' => 'Luthfiyah Nuraini',
                'posisi' => 'Group 3 Teacher',
                'foto' => 'unknown.avif',
            ],
            [
                'index' => 8,
                'nama' => '⁠Fathimah Nasution',
                'posisi' => 'Group 4 Teacher',
                'foto' => 'Fathimah.jpg',
            ],
            [
                'index' => 9,
                'nama' => 'Syabina Hardiansyah',
                'posisi' => 'Group 5 Teacher',
                'foto' => 'unknown.avif',
            ],
            [
                'index' => 10,
                'nama' => 'Salsabila',
                'posisi' => 'Group 6 Teacher',
                'foto' => 'unknown.avif',
            ],
            [
                'index' => 11,
                'nama' => '⁠Muhammad Zarrar Zhofary',
                'posisi' => 'Group 7 Teacher',
                'foto' => 'Zarrar.jpg',
            ],
            [
                'index' => 12,
                'nama' => 'Neba Waqosh Haritsah Annuqman',
                'posisi' => 'Group 8 Teacher',
                'foto' => 'Neba.jpg',
            ],
            [
                'index' => 13,
                'nama' => '⁠Eko Prasetio Yugo',
                'posisi' => 'Group 9 Teacher',
                'foto' => 'Eko.jpg',
            ],
            [
                'index' => 14,
                'nama' => 'Muhamad Imam Syauqi',
                'posisi' => 'Group 10 Teacher',
                'foto' => 'Imam.jpg',
            ],
            [
                'index' => 15,
                'nama' => 'Muhammad Harits Fajar',
                'posisi' => 'Group 11 Teacher',
                'foto' => 'Harits.jpg',
            ],
            [
                'index' => 16,
                'nama' => '⁠Naufal Ahmad Sofyan',
                'posisi' => 'Group 12 Teacher',
                'foto' => 'Sofyan.jpg',
            ],
            [
                'index' => 17,
                'nama' => 'Naufal Hubaysyi',
                'posisi' => 'Tahsin 1 Teacher',
                'foto' => 'Hubaisy.jpg',
            ],
            [
                'index' => 18,
                'nama' => 'Muhammad Fattah Gazanaufal',
                'posisi' => 'Tahsin 2 Teacher',
                'foto' => 'Fattah.jpg',
            ],
            [
                'index' => 19,
                'nama' => 'Amirul Haq Syaharuddin',
                'posisi' => 'Tahsin 3 Teacher',
                'foto' => 'Amir.jpg',
            ],
            [
                'index' => 20,
                'nama' => 'Ridho',
                'posisi' => 'Tahsin 4 Teacher',
                'foto' => 'Ridho.jpg',

            ],
            [
                'index' => 21,
                'nama' => 'Hamidah Zahrotul Aini',
                'posisi' => 'Tahsin 5 Teacher',
                'foto' => 'unknown.avif',
            ]
        ];
    }

    /**
     * Manually paginate the team members array
     */
    private function paginateArray(array $data, int $perPage): LengthAwarePaginator
    {
        $page = $this->getPage();
        $offset = ($page - 1) * $perPage;

        return new LengthAwarePaginator(
            array_slice($data, $offset, $perPage),
            count($data),
            $perPage,
            $page,
            ['path' => request()->url()]
        );
    }

    /**
     * Render the component
     */
    public function render()
    {
        $teamMembers = $this->getTeamMembers();
        $paginatedMembers = $this->paginateArray($teamMembers, $this->perPage);

        return view('livewire.our-team', [
            'teamMembers' => $paginatedMembers,
        ]);
    }
}
