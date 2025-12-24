<?php

namespace App\Livewire\Section;

use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class OurTeam extends Component
{
    use WithoutUrlPagination, WithPagination;

    // Number of items per page
    public $perPage = 8;

    /**
     * Get team members data
     * In production, this could come from a database or API
     */
    private function getTeamMembers(): array
    {
        return [
            [
                'nama' => 'Gabriel F.Harris',
                'posisi' => 'Ketua TPA Abu Dhabi',
                'foto' => 'Gabriel.jpg',
            ],
            [
                'nama' => 'Rifqi M. Firdaus',
                'posisi' => 'Sekertaris TPA',
                'foto' => 'Rifqi.jpg',
            ],
            [
                'nama' => 'Fauzan Nur A.',
                'posisi' => 'Bendahara TPA',
                'foto' => 'Fauzan.jpg',
            ],
            [
                'nama' => 'M. Dhia AL THAF',
                'posisi' => 'Tim Media TPA',
                'foto' => 'Dhia.jpg',

            ],
            [
                'nama' => 'Maria Ulfa',
                'posisi' => 'Pengajar Group 1 TPA',
                'foto' => 'unknown.avif',

            ],
            [
                'nama' => 'Fina Annisa',
                'posisi' => 'Pengajar Group 2 TPA',
                'foto' => 'Fina.jpg',

            ],
            [
                'nama' => 'Rahmatullah',
                'posisi' => 'Pengajar Group 3 TPA',
                'foto' => 'Rahmatullah.jpg',
            ],
            [
                'nama' => 'Fathimah',
                'posisi' => 'Pengajar Group 4 TPA',
                'foto' => 'Fathimah.jpg',
            ],
            [
                'nama' => 'Syabina',
                'posisi' => 'Pengajar Group 5 TPA',
                'foto' => 'unknown.avif',
            ],
            [
                'nama' => 'Salsabila',
                'posisi' => 'Pengajar Group 6 TPA',
                'foto' => 'unknown.avif',
            ],
            [
                'nama' => 'Zarrar',
                'posisi' => 'Pengajar Group 7 TPA',
                'foto' => 'Zarrar.jpg',
            ],
            [
                'nama' => 'Neba',
                'posisi' => 'Pengajar Group 8 TPA',
                'foto' => 'Neba.jpg',
            ],
            [
                'nama' => 'Eko',
                'posisi' => 'Pengajar Group 9 TPA',
                'foto' => 'Eko.jpg',
            ],
            [
                'nama' => 'Imam',
                'posisi' => 'Pengajar Group 10 TPA',
                'foto' => 'Imam.jpg',
            ],
            [
                'nama' => 'Harits',
                'posisi' => 'Pengajar Group 11 TPA',
                'foto' => 'Harits.jpg',
            ],
            [
                'nama' => 'Sofyan',
                'posisi' => 'Pengajar Group 12 TPA',
                'foto' => 'Sofyan.jpg',
            ],
            [
                'nama' => 'Hubaisy',
                'posisi' => 'Pengajar Group  Tahsin 1',
                'foto' => 'Hubaisy.jpg',
            ],
            [
                'nama' => 'Fattah',
                'posisi' => 'Pengajar Group Tahsin 2',
                'foto' => 'Fattah.jpg',
            ],
            [
                'nama' => 'Amir',
                'posisi' => 'Pengajar Group Tahsin 3',
                'foto' => 'Amir.jpg',
            ],
            [
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

        return view('livewire.section.our-team', [
            'teamMembers' => $paginatedMembers,
        ]);
    }
}
