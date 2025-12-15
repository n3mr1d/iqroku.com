import { newtpa } from '@/routes/store';
import { Form } from '@inertiajs/react';
import { useState } from 'react';
import PhoneInput from 'react-phone-input-2';
import 'react-phone-input-2/lib/style.css';

export default function CreateTPA() {
    return <CreateformTPA />;
}

function CreateformTPA() {
    const [phone, setPhone] = useState('');
    const [tanggalLahir, setTanggalLahir] = useState('');
    const [tpaLama, setTpaLama] = useState(false);
    return (
        <Form action={newtpa()} method="post">
            {({ errors, processing, wasSuccessful }) => (
                <div className="space-y-4 p-6">
                    <div>
                        <label className="mb-1 block">Nama Ayah</label>
                        <input
                            type="text"
                            name="nama_ayah"
                            placeholder="Nama Ayah"
                            className={`w-full rounded border p-2 ${errors.nama_ayah ? 'border-red-500' : 'border-gray-300'}`}
                        />
                    </div>

                    <div>
                        <label className="mb-1 block">Nama Ibu</label>
                        <input
                            type="text"
                            name="nama_ibu"
                            placeholder="Nama Ibu"
                            className={`w-full rounded border p-2 ${errors.nama_ibu ? 'border-red-500' : 'border-gray-300'}`}
                        />
                    </div>

                    <div>
                        <label className="mb-1 block">WhatsApp</label>
                        <PhoneInput country="id" value={phone} onChange={setPhone} inputClass={errors.whatsapp ? 'border-red-500' : ''} />
                        <input type="hidden" name="whatsapp" value={phone} />
                    </div>

                    <div>
                        <label className="mb-1 block">Nama Anak</label>
                        <input
                            type="text"
                            name="nama_anak"
                            placeholder="Nama Anak"
                            className={`w-full rounded border p-2 ${errors.nama_anak ? 'border-red-500' : 'border-gray-300'}`}
                        />
                    </div>

                    <div>
                        <label className="mb-1 block">Jenis Kelamin</label>
                        <select
                            name="jenis_kelamin"
                            className={`w-full rounded border p-2 ${errors.jenis_kelamin ? 'border-red-500' : 'border-gray-300'}`}
                        >
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <div>
                        <label className="mb-1 block">Tanggal Lahir</label>
                        <input
                            type="date"
                            name="tanggal_lahir"
                            value={tanggalLahir}
                            onChange={(e) => setTanggalLahir(e.target.value)}
                            className={`w-full rounded border p-2 ${errors.tanggal_lahir ? 'border-red-500' : 'border-gray-300'}`}
                        />
                    </div>

                    <div>
                        <label className="flex items-center gap-2">
                            <input
                                type="checkbox"
                                name="tpalama"
                                checked={tpaLama}
                                onChange={(e) => setTpaLama(e.target.checked)}
                                className={errors.tpalama ? 'border-red-500' : ''}
                            />
                            <span>Pernah ikut TPA sebelumnya?</span>
                        </label>
                    </div>
                    {tpaLama && (
                        <div>
                            <label className="mb-1 block">Kelas TPA</label>
                            <input
                                type="text"
                                name="kelas_tpa"
                                placeholder="Kelas TPA"
                                className={`w-full rounded border p-2 ${errors.kelas_tpa ? 'border-red-500' : 'border-gray-300'}`}
                            />
                        </div>
                    )}

                    <div>
                        <label className="mb-1 block">Saran Waktu TPA</label>
                        <input
                            type="text"
                            name="saran_waktutpa"
                            placeholder="Contoh: Senin-Rabu 15:00"
                            className={`w-full rounded border p-2 ${errors.saran_waktutpa ? 'border-red-500' : 'border-gray-300'}`}
                        />
                    </div>

                    <div>
                        <label className="flex items-center gap-2">
                            <input type="checkbox" name="pendampingan" value="1" className={errors.pendampingan ? 'border-red-500' : ''} />
                            <span>Butuh pendampingan?</span>
                        </label>
                    </div>

                    <div>
                        <label className="mb-1 block">Saran</label>
                        <textarea
                            name="saran"
                            placeholder="Saran dan masukan"
                            className={`w-full rounded border p-2 ${errors.saran ? 'border-red-500' : 'border-gray-300'}`}
                        ></textarea>
                    </div>

                    <button
                        type="submit"
                        disabled={processing}
                        className="w-full rounded bg-blue-500 p-3 text-white hover:bg-blue-600 disabled:bg-gray-400"
                    >
                        {processing ? 'Creating...' : 'Register Now'}
                    </button>

                    {wasSuccessful && <div className="text-center font-semibold text-green-500">User created successfully!</div>}
                </div>
            )}
        </Form>
    );
}
