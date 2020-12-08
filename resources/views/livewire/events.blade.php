<div>
    <section>
        <div class="container">
            <div class="row">
                <div class="card">
                    <div class="card-reader">
                        <h3>Todos os Eventos</h3>
                    </div>
                    <div class="card-body">
                        <button type="submit" class="btn btn-success">entrar</button>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Cartaz</th>
                                    <th>Evento</th>
                                    <th>Data</th>
                                    <th>Cidade</th>
                                    <th>Valor inscrição</th>
                                    <th>Realizador</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($events as $event)
                                    <tr>
                                        <td><img src="{{ $event->image }}" alt=""></td>
                                        <td>{{ $event->title }}</td>
                                        <td>{{ date('d/m/Y', strtotime($event->date)) }}</td>
                                        <td>{{ $event->city }}</td>
                                        <td>{{ $event->price }}</td>
                                        <td>{{ $event->user->name }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
