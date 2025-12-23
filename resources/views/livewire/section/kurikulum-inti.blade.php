  <div>
      <section class="py-16 px-4 sm:px-6  max-w-7xl mx-auto">
          <!-- Header -->
          <div class="text-center mb-16">
              <flux:badge icon="book-open" color="orange">Educational Program</flux:badge>
              <h2 class="curriculum-title opacity-0 text-5xl md:text-6xl font-bold text-gray-900 mb-6">
                  Core Curriculum
              </h2>

              <p class="curriculum-subtitle opacity-0 text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                  A comprehensive Islamic education program designed to nurture young minds with knowledge, faith, and
                  character
              </p>
          </div>

          <!-- Curriculum Grid -->
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
              @foreach ($curricula as $curriculum)
                  <div class="curriculum-card opacity-0 transform bg-white rounded-2xl border-2 {{ $curriculum['border'] }} {{ $curriculum['hover'] }} transition-all duration-300 shadow-lg hover:shadow-2xl cursor-pointer overflow-hidden group"
                      data-curriculum-id="{{ $curriculum['id'] }}">

                      <!-- Card Header with Gradient -->
                      <div class="bg-gradient-to-br {{ $curriculum['color'] }} p-6 relative overflow-hidden">
                          <div
                              class="absolute top-0 right-0 w-32 h-32 bg-white opacity-10 rounded-full -mr-16 -mt-16 transform group-hover:scale-150 transition-transform duration-500">
                          </div>
                          <div
                              class="curriculum-icon text-6xl mb-3 relative z-10 transform group-hover:scale-110 group-hover:rotate-12 transition-all duration-500">
                              {{ $curriculum['icon'] }}
                          </div>
                          <h3 class="curriculum-card-title text-xl font-bold text-gray-800 relative z-10 leading-tight">
                              {{ $curriculum['title'] }}
                          </h3>
                      </div>

                      <!-- Card Body -->
                      <div class="p-6">
                          <p class="curriculum-card-description text-gray-600 leading-relaxed mb-4">
                              {{ $curriculum['description'] }}
                          </p>

                      </div>

                      <!-- Decorative Corner -->
                      <div class="absolute top-0 left-0 w-16 h-16 overflow-hidden">
                          <div
                              class="absolute transform -rotate-45 bg-gradient-to-br {{ $curriculum['color'] }} text-white text-xs font-bold py-1 left-[-34px] top-[10px] w-[120px] text-center shadow-md">
                              NEW
                          </div>
                      </div>
                  </div>
              @endforeach
          </div>


      </section>


  </div>
