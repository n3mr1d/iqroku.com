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
                'nama' => 'Gabriel F.Harris',
                'posisi' => 'Ketua TPA',
                'foto' => 'Gabriel.jpg',
            ],
            [

                'index' => 2,
                'nama' => 'Rifqi M. Firdaus',
                'posisi' => 'Sekertaris TPA',
                'foto' => 'Rifqi.jpg',
            ],
            [
                'index' => 3,
                'nama' => 'Fauzan Nur A.',
                'posisi' => 'Bendahara TPA',
                'foto' => 'Fauzan.jpg',
            ],
            [
                'index' => 4,
                'nama' => 'M. Dhia AL THAF',
                'posisi' => 'Tim Media TPA',
                'foto' => 'Dhia.jpg',

            ],
            [
                'index' => 5,
                'nama' => 'Maria Ulfa',
                'posisi' => 'Pengajar Group 1 TPA',
                'foto' => 'unknown.avif',

            ],
            [
                'index' => 6,
                'nama' => 'Fina Annisa',
                'posisi' => 'Pengajar Group 2 TPA',
                'foto' => 'Fina.jpg',

            ],
            [
                'index' => 7,
                'nama' => 'Luthfiyah',
                'posisi' => 'Pengajar Group 3 TPA',
                'foto' => 'maleunknown.jpg',
            ],
            [
                'index' => 8,
                'nama' => 'Fathimah',
                'posisi' => 'Pengajar Group 4 TPA',
                'foto' => 'Fathimah.jpg',
            ],
            [
                'index' => 9,
                'nama' => 'Syabina',
                'posisi' => 'Pengajar Group 5 TPA',
                'foto' => 'unknown.avif',
            ],
            [
                'index' => 10,
                'nama' => 'Salsabila',
                'posisi' => 'Pengajar Group 6 TPA',
                'foto' => 'unknown.avif',
            ],
            [
                'index' => 11,
                'nama' => 'Zarrar',
                'posisi' => 'Pengajar Group 7 TPA',
                'foto' => 'Zarrar.jpg',
            ],
            [
                'index' => 12,
                'nama' => 'Neba',
                'posisi' => 'Pengajar Group 8 TPA',
                'foto' => 'Neba.jpg',
            ],
            [
                'index' => 13,
                'nama' => 'Eko',
                'posisi' => 'Pengajar Group 9 TPA',
                'foto' => 'Eko.jpg',
            ],
            [
                'index' => 14,
                'nama' => 'Imam',
                'posisi' => 'Pengajar Group 10 TPA',
                'foto' => 'Imam.jpg',
            ],
            [
                'index' => 15,
                'nama' => 'Harits',
                'posisi' => 'Pengajar Group 11 TPA',
                'foto' => 'Harits.jpg',
            ],
            [
                'index' => 16,
                'nama' => 'Sofyan',
                'posisi' => 'Pengajar Group 12 TPA',
                'foto' => 'Sofyan.jpg',
            ],
            [
                'index' => 17,
                'nama' => 'Hubaisy',
                'posisi' => 'Pengajar Group  Tahsin 1',
                'foto' => 'Hubaisy.jpg',
            ],
            [
                'index' => 18,
                'nama' => 'Fattah',
                'posisi' => 'Pengajar Group Tahsin 2',
                'foto' => 'Fattah.jpg',
            ],
            [
                'index' => 19,
                'nama' => 'Amir',
                'posisi' => 'Pengajar Group Tahsin 3',
                'foto' => 'Amir.jpg',
            ],
            [
                'index' => 20,
                'nama' => 'Ridho',
                'posisi' => 'Pengajar Group Tahsin 4',
                'foto' => 'Ridho.jpg',

            ],
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
