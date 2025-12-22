<?php

namespace App\Livewire\Section;

use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class OurTeam extends Component
{
    use WithoutUrlPagination,WithPagination;

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
                'foto' => 'https://avatars.githubusercontent.com/u/100200171?v=4',
            ],
            [
                'nama' => 'Rifqi M. Firdaus',
                'posisi' => 'Sekertaris TPA',
                'foto' => 'https://avatars.githubusercontent.com/u/100200171?v=4',
            ],
            [
                'nama' => 'Fauzan Nur A.',
                'posisi' => 'Bendahara TPA',
                'foto' => 'https://avatars.githubusercontent.com/u/100200171?v=4',
            ],
            [
                'nama' => 'M. Dhia AL THAF',
                'posisi' => 'Tim Media TPA',
                'foto' => 'https://avatars.githubusercontent.com/u/100200171?v=4',

            ],
            [
                'nama' => 'Maria Ulfa',
                'posisi' => 'Pengajar Group 1 TPA',
                'foto' => 'https://avatars.githubusercontent.com/u/100200171?v=4',

            ],
            [
                'nama' => 'Fina Annisa',
                'posisi' => 'Pengajar Group 2 TPA',
                'foto' => 'https://avatars.githubusercontent.com/u/100200171?v=4',

            ],
            [
                'nama' => 'Rahmatullah',
                'posisi' => 'Pengajar Group 3 TPA',
                'foto' => 'https://avatars.githubusercontent.com/u/100200171?v=4',
            ],
            [
                'nama' => 'Fathimah',
                'posisi' => 'Pengajar Group 4 TPA',
                'foto' => 'https://avatars.githubusercontent.com/u/100200171?v=4',
            ],
            [
                'nama' => 'Syabina',
                'posisi' => 'Pengajar Group 5 TPA',
                'foto' => 'https://avatars.githubusercontent.com/u/100200171?v=4',
            ],
            [
                'nama' => 'Salsabila',
                'posisi' => 'Pengajar Group 6 TPA',
                'foto' => 'https://avatars.githubusercontent.com/u/100200171?v=4',
            ],
            [
                'nama' => 'Zarrar',
                'posisi' => 'Pengajar Group 7 TPA',
                'foto' => 'https://avatars.githubusercontent.com/u/100200171?v=4',
            ],
            [
                'nama' => 'Neba',
                'posisi' => 'Pengajar Group 8 TPA',
                'foto' => 'https://avatars.githubusercontent.com/u/100200171?v=4',
            ],
            [
                'nama' => 'Eko',
                'posisi' => 'Pengajar Group 9 TPA',
                'foto' => 'https://avatars.githubusercontent.com/u/100200171?v=4',
            ],
            [
                'nama' => 'Imam',
                'posisi' => 'Pengajar Group 10 TPA',
                'foto' => 'https://avatars.githubusercontent.com/u/100200171?v=4',
            ],
            [
                'nama' => 'Harits',
                'posisi' => 'Pengajar Group 11 TPA',
                'foto' => 'https://avatars.githubusercontent.com/u/100200171?v=4',
            ],
            [
                'nama' => 'Sofyan',
                'posisi' => 'Pengajar Group 12 TPA',
                'foto' => 'https://avatars.githubusercontent.com/u/100200171?v=4',
            ],
            [
                'nama' => 'Hubaisy',
                'posisi' => 'Pengajar Group  Tahsin 1',
                'foto' => 'https://avatars.githubusercontent.com/u/100200171?v=4',
            ],
            [
                'nama' => 'Fattah',
                'posisi' => 'Pengajar Group Tahsin 2',
                'foto' => 'https://avatars.githubusercontent.com/u/100200171?v=4',
            ],
            [
                'nama' => 'Amir',
                'posisi' => 'Pengajar Group Tahsin 3',
                'foto' => 'https://avatars.githubusercontent.com/u/100200171?v=4',
            ],
            [
                'nama' => 'Ridho',
                'posisi' => 'Pengajar Group Tahsin 4',
                'foto' => 'https://avatars.githubusercontent.com/u/100200171?v=4',

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
